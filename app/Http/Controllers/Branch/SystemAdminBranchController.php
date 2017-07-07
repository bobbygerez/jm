<?php

namespace App\Http\Controllers\Branch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\Branch\BranchInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class SystemAdminBranchController extends Controller
{
    
    protected $branch;

    public function __construct(BranchInterface $branch){

    	$this->branch = $branch;

    }

    public function index(){

    	$request = app()->make('request');

    	$branches  = $this->branch
    				->with(['merchant'])
    				->orderBy('created_at', 'desc')
    				->get();


        $paginate = new LengthAwarePaginator($branches->forPage($request->page, $request->per_page), $branches->count(), $request->per_page, $request->page);

        return response()->json([

                'branches' => $paginate

            ]);
    }
}
