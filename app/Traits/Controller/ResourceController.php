<?php 

namespace App\Traits\Controller;

use Illuminate\Http\Request;

trait ResourceController {

	public function index(){

		 return app('App\Http\Controllers\Branch'. '\\'. $this->role. 'BranchController')
		 	->index();
	}

	public function show($id){

		return app('App\Http\Controllers\Branch'. '\\'. $this->role. 'BranchController')
		 	->show($id);
	}

	public function edit($id){

		return app('App\Http\Controllers\Branch'. '\\'. $this->role. 'BranchController')
		 	->edit($id);
	}

	

}