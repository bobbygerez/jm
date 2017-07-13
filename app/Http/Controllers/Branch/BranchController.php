<?php

namespace App\Http\Controllers\Branch;

use App\Http\Requests\Branch\BranchCompanyInfoRequest;
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

    public function branchSearch(){

    	return app('App\Http\Controllers\Branch'. '\\'. $this->role. 'BranchController')
		 	->branchSearch();
    }


    public function companyInfoUpdate(BranchCompanyInfoRequest $request){

        return app('App\Http\Controllers\Branch'. '\\'. $this->role. 'BranchController')
            ->companyInfoUpdate();
    }

    public function contactInfoUpdate(){

        return app('App\Http\Controllers\Branch'. '\\'. $this->role. 'BranchController')
            ->contactInfoUpdate();
    }

    public function uploadPhotos(){
        return app('App\Http\Controllers\Branch'. '\\'. $this->role. 'BranchController')
            ->uploadPhotos();
    }

    public function removePhotos(){

        return app('App\Http\Controllers\Branch'. '\\'. $this->role. 'BranchController')
            ->removePhotos();
    }

    public function getImagesDZ(){

        return app('App\Http\Controllers\Branch'. '\\'. $this->role. 'BranchController')
            ->getImagesDZ();
    }

    
}
