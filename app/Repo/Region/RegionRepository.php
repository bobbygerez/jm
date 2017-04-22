<?php namespace App\Repo\Region;

use App\Repo\BaseRepository;
use App\Repo\BaseInterface;
use App\ModelLocations\Region;

class RegionRepository extends BaseRepository implements RegionInterface{

	public function __construct(){

		$this->modelName = new Region();
	}

	
}