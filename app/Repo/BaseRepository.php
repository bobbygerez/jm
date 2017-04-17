<?php namespace App\Repo;


class BaseRepository{

	protected $modelName;

	public function all(){

		return $this->modelName->all();
	}

	public function store( $request ){

		return $this->modelName->create([ $request ]);

	}

	public function find( $id ){

		return $this->modelName->find($id);
	}

	public function update($id){

		return false;
	}

	public function delete($id){

		return $this->modelName->find($id)->delete();
	}

	public function where($fieldName, $id){

		return $this->modelName->where($fieldName, $id);
	}
	
}