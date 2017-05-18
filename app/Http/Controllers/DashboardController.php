<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Obfuscate;

class DashboardController extends Controller
{

	protected $user;

    public function __construct(){

    	$this->middleware('auth');
    }


    public function index(){

    	return redirect()->to('user/' . Obfuscate::encode(Auth::User()->id) );
    }
}
