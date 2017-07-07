<?php

namespace App\Http\Controllers\Branch;

use App\Traits\Controller\ResourceController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class BranchController extends Controller
{
    use ResourceController;


    public function __construct(){

    	$this->middleware('auth');

		$this->middleware(function($request, $next){

			$this->role =  Auth::User()->role();

			return $next($request);
		});

    }

    
}
