<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class UserController extends Controller
{
    
    protected $role;

    public function __construct(User $user){

        $this->user = $user;
        
    	$this->middleware('auth');
        $this->middleware(function($request, $next){

            $positions = Auth::User()->positions;

            $roles = $positions->map(function($position){

                return $position->roles->map(function($role){

                    return $role;
                });
            });

            $role = $roles[0]->min()->name;
            $this->role = str_replace(' ', '', $role);
            return $next($request);
        });
    	
    }


    public function index(){

        $this->authorize('index', $this->user);

        return app('App\Http\Controllers\User'. '\\'. $this->role. 'UserController')->index();
    }


    public function edit($id){

        return app('App\Http\Controllers\User'. '\\'. $this->role. 'UserController')->edit($id);
    }

     public function update($id){

        return app('App\Http\Controllers\User'. '\\'. $this->role. 'UserController')->update($id);
    }

    public function userPopUp(){


        return app('App\Http\Controllers\User'. '\\'. $this->role. 'UserController')->userPopUp();

    }

    public function search(){
         
         return app('App\Http\Controllers\User'. '\\'. $this->role. 'UserController')->search();
    }

    public function removePosition(){

       return app('App\Http\Controllers\User'. '\\'. $this->role. 'UserController')->removePosition();
    }

     public function addPosition(){

       return app('App\Http\Controllers\User'. '\\'. $this->role. 'UserController')->addPosition();
    }

}
