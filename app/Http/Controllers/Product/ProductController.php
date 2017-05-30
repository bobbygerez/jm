<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Product\AdminProductController;
use App\Http\Controllers\Product\AreaManagerProductController;
use Auth;

class ProductController extends Controller
{

	protected $role;

	public function __construct(){


		$this->middleware('auth');
		$this->middleware(function($request, $next){

			$role = Auth::User()->roles->min()->name;
			$this->role = str_replace(' ', '', $role);
			return $next($request);
		});

	}
    
	public function index(){
		
		return app('App\Http\Controllers\Product'. '\\'. $this->role. 'ProductController')->index();

	}

	public function edit($id){

		return app('App\Http\Controllers\Product'. '\\'. $this->role. 'ProductController')->edit($id);
	}


	public function update($id){

		return app('App\Http\Controllers\Product'. '\\'. $this->role. 'ProductController')->update($id);
	}

	public function destroy($id){

		return app('App\Http\Controllers\Product'. '\\'. $this->role. 'ProductController')->destroy($id);
	}


    public function getProduct($mainCat, $merchantCat, $merchantSub, $productName, $productId){

    	$menuCategories = $this->mainCategory->with(['merchantCategory', 'merchantCategory.merchantSubcategory'])->get();
    	$product = $this->product->whereNoDecode('id', $productId)->with(['merchantSubcategory.merchantCategory.mainCategory'])->first();

    	return view('templates.template3.products.product', compact('product', 'menuCategories'));
    }
}
