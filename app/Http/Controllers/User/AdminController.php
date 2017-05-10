<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\User\UserInterface;
use App\Repo\Role\RoleInterface;

class AdminController extends Controller
{
    
    protected $user;

    public function __construct(UserInterface $user, RoleInterface $role){

    	$this->middleware('auth');
    	$this->middleware('role:Admin');
    	$this->user = $user;
        $this->role = $role;
    }

    public function getUsers(){

    	$request = app()->make('request');
        $users = '';
        $roleId = $request->roleId;
        $string = $request->string;
        $roles = $this->role->all();

        if($roleId !=''){

           return $this->user->roleId($roleId, $string, $roles);
        }
       

        if($request->string != ''){

            $users = $this->user->orWhere('lastname', 'LIKE', '%'.$string.'%')
                ->orWhere('firstname', 'LIKE', '%'.$string.'%')
                ->orWhere('email', 'LIKE', '%'.$string.'%')
                ->orderBy('lastname', 'asc')
                ->with('roles')
                ->get();
            
        }

        else{

           
            $users = $this->user->orderBy('lastname', 'asc')->with('roles')->get();
            
        }

    	
    	return response()->json([
    			'users' => $users,
                'roles' => $roles
    		]);
    }

    public function getUser(){

        $request = app()->make('request');
        
        $user = $this->user->whereNoDecode('id', $request->userId)->with(['roles'])->first();

        return response()->json([

                'user' => $user,
                'roles' => $this->role->all()
            ]);
    }

    public function update(Request $request, $id){

        $user = $this->user->update($request, $id);

        return response()->json([

                'message' => 'The User has been Updated!'

            ]);
        
    }

    public function destroy($id){

        $this->user->findNoDecode($id)->delete();

        return response()->json([

                'message' => 'The User has been Deleted!'

            ]);
    }

}
