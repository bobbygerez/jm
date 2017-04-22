<?php namespace App\Repo;

use Obfuscate;

class BaseRepository{

	protected $modelName;

	public function all(){

		return $this->modelName->all();
	}

	public function store( $request ){

		return $this->modelName->create([ $request ]);

	}

	public function find( $id ){

		$origId = Obfuscate::decode($id);
		return $this->modelName->find($origId);
	}

	
	public function where($fieldName, $id){

		$origId = Obfuscate::decode($id);
		return $this->modelName->where($fieldName, $origId);
	}

	public function with($array){

		return $this->modelName->with($array);
	}

	public function searchPaginateAndOrder(){

		return $this->modelName->searchPaginateAndOrder();
	}
	
}