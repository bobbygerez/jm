<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repo\MainCategory\MainCategoryInterface;

class NavController extends Controller
{

    
    public function home(MainCategoryInterface $maincategory){

    	$maincategories = $maincategory->with('merchantcategory')->take(8)->get();
    	
    	return view('templates.template3.index', compact('maincategories'));
    }

    public function mainCategories(){

    	dd('All Main Categories');
    }
}
