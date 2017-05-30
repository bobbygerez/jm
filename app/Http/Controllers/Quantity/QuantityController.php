<?php

namespace App\Http\Controllers\Quantity;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuantityController extends Controller
{
    
    public function __construct(){

    	$this->middleware('auth');
    }

    public function store(){

    	app('App\Http\Controllers\Quantity\AreaManagerQuantityController')->store();

    	return response()->json([

    			'message' => 'You have successfully added a quantity.',
    			'success' => true
    		]);
    }

    public function destroy($id){

    	app('App\Http\Controllers\Quantity\AreaManagerQuantityController')->destroy($id);
    	
    	return response()->json([

    			'message' => 'You have successfully deleted the quantity.'
    		]);
    }
}
