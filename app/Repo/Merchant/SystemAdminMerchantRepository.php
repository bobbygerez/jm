<?php namespace App\Repo\Merchant;

use App\Repo\BaseRepository;
use App\Repo\BaseInterface;
use App\Merchant;
use Auth;

class SystemAdminMerchantRepository extends BaseRepository implements MerchantInterface{

	public function __construct(){

		$this->modelName = new Merchant();
	}

	public function updateMerchant($request){

		$franchisee = [];
		$franchisee['trade_id'] = $request->all()['franchisee'];
		$franchisee['created_by'] = Auth::User()->id;
		$franchisee['merchant_id'] = $request->id;

		$merchant = $this->findNoDecode($request->id);
	
		if($merchant->franchisee != null ){

			$merchant->franchisee()->update($franchisee);
		}
		else{

			$merchant->franchisee()->create($franchisee);
		}

        $merchant->update($request->all());

        return $this->whereNoDecode('id', $request->id)
            ->with(['branches','photos', 'trade.franchise', 'address.country', 'address.province', 'address.city'])
            ->first();
	}

	public function contactInfo($request){

		$merchant = $this->findNoDecode($request->id);
		$request = collect($request->all());

		$merchant->update($request['companyInfo']);

        if ( count($merchant->address) > 0) {

            $merchant->address()->update($request['contactInfo']);

        }

        else {

            $merchant->address()->create($request['contactInfo']);

        }

         return $merchant->name . ' address has been successfully updated.';
	}

	public function photoUpload( $request ){

		dd($request->all());
		$requestAll = $request->all();

		$file = $request->file;

		$destinationPath = 'images/uploads/';
		// Get the orginal filname or create the filename of your choice
		$filename =  str_random(10) . '-' . $file->getClientOriginalName();
		// Copy the file in our upload folder
		$file->move($destinationPath, $filename );

		$merchant = $this->findNoDecode($request->merchant_id);

		$requestAll['name'] = $file->getClientOriginalName();
		$requestAll['path'] = $destinationPath.$filename;

		$merchant->photos()->create($requestAll);
		
		return 'You have successfully uploaded the image';
	}

	public function removePhotos(){

		
	}
}