<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\User\UserInterface;
use App\Repo\Role\RoleInterface;
use App\Repo\City\CityInterface;
use App\Repo\MaritalStatus\MaritalStatusInterface;

class SystemAdminUserController extends Controller
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
        
        $users = $this->user->getAllUsers($request);

        $roles = $this->role->orderBy('name', 'asc')->get();
        
        return response()->json([
                'users' => $users,
                'roles' => $roles
            ]);
    }


    public function edit($id){


        $roles = $this->role->orderBy('created_at', 'asc')->get();

        $maritalStatus = $this->maritalStatus->orderBy('name', 'asc')->get();

        $user = $this->user->whereNoDecode('id', $id)
            ->with(['roles', 'personalData', 'contactData'])
            ->first();

        $heirarchy = $user->roles->min()->heirarchy;

        return response()->json([

                'user' => $user,
                'chunkRoles' => $roles->chunk(3),
                'maritalStatus' => $maritalStatus,
                'heirarchy' => $heirarchy,
                'success' => true,

            ]);
    }

    public function update($id){

        $request = app()->make('request');
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

    public function userPopUp(){

        $request = app()->make('request');
        


        $users = $this->user->orWhereHas('personalData', $request->q)
            ->with(['personalData'])
            ->take(8)
            ->get();

        // $users = $this->user->with(['personalData'])->get();

        $data = $users->map( function($item){

                return [
                    'id' => $item->id,
                    'user' => $item->personalData->firstname . ' ' . $item->personalData->lastname,
                    'email' => $item->email,
                    'firstname' => $item->personalData->firstname,
                    'lastname' => $item->personalData->lastname

                ];
        });

        
        return response()->json(

                $data
            );
    }
}
