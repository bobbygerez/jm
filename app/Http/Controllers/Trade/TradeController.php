<?php

namespace App\Http\Controllers\Trade;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class TradeController extends Controller
{
   	
   	public function checkUnique(){

   		$request = app()->make('request');

   		$validator = Validator::make($request->all(),[
   				'name' => 'unique:trade,name,'.$request->id
   			]);

   		if($validator->fails()){

   			return response()->json( [
   				'errors' => $validator->errors(),
   				'success' => false
   				] );
   		}

   		return response()->json([

   				'success' => true
   			]);
   	}
}
