<?php

namespace App\Http\Controllers\Branch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\Branch\BranchInterface;

class BranchController extends Controller
{
    
    protected $branch;
    public function __construct(BranchInterface $branch){

    	$this->branch = $branch;
    }

    public function merchantId(){

    }
}
