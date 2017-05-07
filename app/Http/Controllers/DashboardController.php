<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{

	protected $user;

    public function __construct(){

    	$this->middleware('auth');
    }


    public function index(){

    	return view('templates.template3.dashboard.index');
    }
}
