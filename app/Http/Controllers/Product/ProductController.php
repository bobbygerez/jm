<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\Product\ProductInterface;
use App\Repo\MainCategory\MainCategoryInterface;

class ProductController extends Controller
{

	protected $product;
	protected $mainCategory;

	public function __construct(ProductInterface $product, MainCategoryInterface $mainCategory){

		$this->product = $product;
		$this->mainCategory = $mainCategory;
	}
    

    public function getProduct($mainCat, $merchantCat, $merchantSub, $productName, $productId){

    	$menuCategories = $this->mainCategory->with(['merchantCategory', 'merchantCategory.merchantSubcategory'])->get();
    	$product = $this->product->whereNoDecode('id', $productId)->with(['merchantSubcategory.merchantCategory.mainCategory'])->first();

    	return view('templates.template3.products.product', compact('product', 'menuCategories'));
    }
}
