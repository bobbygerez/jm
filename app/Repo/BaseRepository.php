<?php namespace App\Repo;

use Obfuscate;

class BaseRepository{

	protected $modelName;

	public function all(){

		return $this->modelName->all();
	}

	public function store( $request ){

		return $this->modelName->create($request->all());

	}

	public function find( $id ){

		$origId = Obfuscate::decode($id);
		return $this->modelName->find($origId);
	}

	public function findNoDecode($id){

		return $this->modelName->find($id);
	}

	public function update($request, $id){

		return $this->modelName->find($id)->update($request->all());
	}

	public function destroy($id){

		return $this->modelName->find($id)->delete();
	}
	public function where($fieldName, $id){

		$origId = Obfuscate::decode($id);
		return $this->modelName->where($fieldName, $origId);
	}

	public function whereIn($fieldName, $array){

		return $this->modelName->whereIn($fieldName, $array);
	}

	public function whereNoDecode($fieldName, $id){

		return $this->modelName->where($fieldName, $id);
	}

	public function whereOperator($fieldName, $operator, $value){

		return $this->modelName->where($fieldName, $operator, $value);
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

	public function orWhere($fieldName, $operator, $value){

		return $this->modelName->orWhere($fieldName, $operator, $value);
	}
	
	
	public function first( $model ){

		$result = $model->first();
		if($result){

			return $result;
		}

		return [];
	}
}