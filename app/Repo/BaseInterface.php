<?php namespace App\Repo;

interface BaseInterface {

	public function all();
	public function store( $request );
	public function find($id);
	public function update($id);
	public function delete( $id);
	public function where($fieldName, $id);
}