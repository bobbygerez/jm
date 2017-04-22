<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repo\MainCategory\MainCategoryInterface;
use App\Repo\MerchantCategory\MerchantCategoryInterface;
use App\Repo\MerchantSubcategory\MerchantSubcategoryInterface;

class NavController extends Controller
{

	protected $mainCategory;
    protected $merchantCategory;
    protected $merchantSubcategory;

	public function __construct(MainCategoryInterface $mainCategory, MerchantCategoryInterface $merchantCategory, MerchantSubcategoryInterface $merchantSubcategory){

		$this->mainCategory = $mainCategory;
        $this->merchantCategory = $merchantCategory;
        $this->merchantSubcategory = $merchantSubcategory;
	}
    
    public function home(){

    	$mainCategories = $this->mainCategory->with(['merchantCategory', 'merchantCategory.merchantSubcategory'])->take(8)->get();
    	
    	return view('templates.template3.index', compact('mainCategories'));
    }

    public function mainCategories(){
    	
        return view('templates.template3.maincategories');
    }

    public function merchantCategories($merchantCategoryId){

    	$merchantCategories = $this->merchantCategory->where('id', $merchantCategoryId)->with(['merchantSubcategory', 'products'])->get();
        dd($merchantCategories);
    }

    public function merchantSubcategories($merchantSubcategoryId){


        $merchantSubcategories = $this->merchantSubcategory->where('id', $merchantSubcategoryId)->with('products')->get();
        dd($merchantSubcategories);
    }

    public function sample(){

        return view('templates.template3.sample');
    }
}
