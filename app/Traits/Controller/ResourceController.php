<?php 

namespace App\Traits\Controller;

use Illuminate\Http\Request;

trait ResourceController {

	public function index(){

		 return app('App\Http\Controllers\Branch'. '\\'. $this->role. 'BranchController')
		 	->index();
	}

}