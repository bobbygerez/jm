<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\Merchant\MerchantInterface;

class SystemAdminMerchantController extends Controller
{
    
    protected $merchant;

	public function __construct(MerchantInterface $merchant){

		$this->merchant = $merchant;

	}

    public function index(){

    	$merchants  = $this->merchant
    				->with(['branches'])
    				->orderBy('created_at', 'desc')
    				->get();

    	return response()->json([

    			'merchants' => $merchants
    		]);
    }

    public function branches(){

        $request = app()->make('request');

        $merchant = $this->merchant->findNoDecode($request->merchantId);

        return response()->json([

                'branches' => $merchant->branches

            ]);

    }

    public function search(){

        $request = app()->make('request');

        $merchants = $this->merchant->whereOperator('name', 'LIKE', '%'.$request->q.'%')->take(8)->get();
        
        $merchants = $merchants->map(function($item){

            return [

                'id' => $item->id,
                'name' => $item->name . ' (' . $item->email . ')',
                'email' => $item->email
            ];
        });
        return response()->json($merchants);        
    }
}
