<?php

namespace App\Http\Controllers\Policy;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\Policy\PolicyInterface;
use Auth;

class PolicyController extends Controller
{

	protected $policy;

    public function __construct(PolicyInterface $policy){

    	$this->middleware('auth');
    	$this->policy = $policy;

    }

    public function index(){

    	$policy  = $this->policy->findNoDecode(Auth::User()->id);

    	return response()->json([

                'policies' => $this->policy->all(),
    			'user' => $policy->users()
                                ->newPivotStatement()
                				->where('user_id', Auth::User()->id)
                                ->get()

    		]);
    }
}
