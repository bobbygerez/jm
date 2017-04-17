<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    
    public function home(){

    	return view('templates.template3.index');
    }
}
