<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\User\UserInterface;

use Auth;

class BranchManagerProductController extends Controller
{
    
    protected $merchant;

    public function __construct(UserInterface $user){

    	$this->middleware('auth');
    	$this->middleware('role:Branch Manager');
    	$this->user = $user;
    }

    public function index(){

        $user = $this->user->whereNoDecode('id', Auth::User()->id)
            ->with(['merchants'])->get();

        dd($user);
    	return response()->json([


    		]);
    }
}
