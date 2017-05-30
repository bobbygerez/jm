<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UserController extends Controller
{
    
    protected $role;

    public function __construct(){

    	$this->middleware('auth');
        $this->middleware(function($request, $next){

            $role = Auth::User()->roles->min()->name;
            $this->role = str_replace(' ', '', $role);
            return $next($request);
        });
    	
    }


    public function index(){

        return app('App\Http\Controllers\User'. '\\'. $this->role. 'UserController')->index();
    }


    public function edit($id){

        return app('App\Http\Controllers\User'. '\\'. $this->role. 'UserController')->edit($id);
    }

     public function update($id){

        return app('App\Http\Controllers\User'. '\\'. $this->role. 'UserController')->update($id);
    }

}
