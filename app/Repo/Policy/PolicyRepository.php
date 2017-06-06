<?php namespace App\Repo\Policy;

use App\Repo\BaseRepository;
use App\Repo\BaseInterface;
use App\Policy;

class PolicyRepository extends BaseRepository implements PolicyInterface{

	public function __construct(){

		$this->modelName = new Policy();
	}

	
}