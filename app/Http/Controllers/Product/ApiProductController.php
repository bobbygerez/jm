<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\Product\ProductInterface;

class ApiProductController extends Controller
{
    protected $product;

    public function __construct(ProductInterface $product){

    	$this->product = $product;
    }

    public function maincategories(){

    	return response()->json([

    			'columns' => $this->product::$columns,
    			'model' => $this->product->searchPaginateAndOrder()

    		]);
    }
}
