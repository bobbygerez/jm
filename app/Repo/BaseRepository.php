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

	public function whereNoDecode($fieldName, $id){

		return $this->modelName->where($fieldName, $id);
	}


	public function with($array){

		return $this->modelName->with($array);
	}

	public function searchPaginateAndOrder(){

		return $this->modelName->searchPaginateAndOrder();
	}

	public function orderBy($fieldName, $sort){

		return $this->modelName->orderBy($fieldName, $sort);
	}
	
	public function first( $model ){

		$result = $model->first();
		if($result){

			return $result;
		}

		return [];
	}
}