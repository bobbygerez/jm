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

        if($request->string != ''){

            $users = $this->user->orWhere('lastname', 'LIKE', '%'.$request->string.'%')
                ->orWhere('firstname', 'LIKE', '%'.$request->string.'%')
                ->orWhere('email', 'LIKE', '%'.$request->string.'%')
                ->orderBy('lastname', 'asc')
                ->with('roles')
                ->get();
        }

        else{

            $users = $this->user->orderBy('lastname', 'asc')->with('roles')->get();
        }
    	
    	return response()->json([
    			'users' => $users
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

        dd($request->all());
    }
}
