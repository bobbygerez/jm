<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\User\UserInterface;
use App\Repo\Role\RoleInterface;
use App\Repo\City\CityInterface;
use App\Repo\MaritalStatus\MaritalStatusInterface;

class AdminController extends Controller
{
    
    protected $user;
    protected $role;
    protected $maritalStatus;
    protected $city;

    public function __construct(UserInterface $user, RoleInterface $role, MaritalStatusInterface $maritalStatus, CityInterface $city){

    	$this->middleware('auth');
    	$this->middleware('role:System Admin');
    	$this->user = $user;
        $this->role = $role;
        $this->maritalStatus =$maritalStatus;
        $this->city = $city;
    }

    
    public function index(){

    	$request = app()->make('request');
        $users = '';
        $roleId = $request->roleId;
        $string = $request->string;
        $roles = $this->role->orderBy('name', 'asc')->get();

        if($roleId !=''){

           return $this->user->roleId($roleId, $string, $roles);
        }
       

        if($request->string != ''){

            $string = $request->string;

            $users = $this->user->orWhereHas('personalData', $string)
            ->with(['personalData'])
            ->get();

        }

        else{

           
            $users = $this->user->with(['roles', 'personalData'])->get();
            $users =  $users->sortBy('lastname')->values()->all();
        }

    	
    	return response()->json([
    			'users' => $users,
                'roles' => $roles
    		]);
    }

    public function edit($id){

        $request = app()->make('request');
        $roles = $this->role->orderBy('created_at', 'asc')->get();
        $maritalStatus = $this->maritalStatus->orderBy('name', 'asc')->get();
        $user = $this->user->whereNoDecode('id', $id)->with(['roles', 'personalData'])->first();

        return response()->json([

                'user' => $user,
                'chunkRoles' => $roles->chunk(3),
                'maritalStatus' => $maritalStatus
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
