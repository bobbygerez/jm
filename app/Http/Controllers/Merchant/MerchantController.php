<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class MerchantController extends Controller
{
    
    protected $role;

	public function __construct(){

		$this->middleware('auth');

		$this->middleware(function($request, $next){

			$this->role =  Auth::User()->role();

			return $next($request);
		});
	}

	public function index(){

		 return app('App\Http\Controllers\Merchant'. '\\'. $this->role. 'MerchantController')->index();
	}

	public function branches(){
		return app('App\Http\Controllers\Merchant'. '\\'. $this->role. 'MerchantController')->branches();
	}

	public function search(){
		return app('App\Http\Controllers\Merchant'. '\\'. $this->role. 'MerchantController')->search();
	}
}
