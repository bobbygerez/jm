<?php namespace App\Repo\MainCategory;

use App\Repo\BaseRepository;
use App\Repo\BaseInterface;
use App\MainCategory;

class MainRepository extends BaseRepository implements MainInterface{

	public function __construct(){

		$this->modelName = new MainCategory();
	}

	
	
}