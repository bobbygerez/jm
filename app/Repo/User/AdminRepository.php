<?php namespace App\Repo\User;

use App\Repo\BaseRepository;
use App\Repo\BaseInterface;
use App\User;

class AdminRepository extends BaseRepository implements UserInterface{

	public function __construct(){

		$this->modelName = new User();
	}

	public function update($request, $id){

		$roles = $request->input('roles');

		$user = $this->modelName->find($id);

		$user->update($request->all());

		$user->roles()->sync($roles);
        
        $user->personalData->update( $request->all() );

	}


	
	public function roleId($roleId, $string, $roles) {

		$users = '';

		if($string == ''){

                $users = $this->modelName->with(['roles', 'personalData', 'contactData'])->get();
        }
        else{

             $users = $this->orWhereHas('personalData', $string)
                 ->with(['roles', 'personalData', 'contactData'])
                 ->get();
        }
            
            
        $users =  $users->filter(function($user) use ($roleId, $string){
            
            foreach ($user->roles as $role) {
                
                if ($role->id == $roleId) {
                    
                    
                    return $user;
                }
            }
        });


        return response()->json([
            'users' => $users,
            'roles' => $roles
        ]);
	}

    public function orWhereHas($model, $string){

        return $this->modelName->orWhereHas($model, function($query) use ($string) {

                $query->where('lastname', 'LIKE', '%'.$string.'%')
                    ->orWhere('firstname', 'LIKE', '%'.$string.'%');

            })
            ->orWhere('email', 'LIKE', '%'.$string.'%');
    }
	
}