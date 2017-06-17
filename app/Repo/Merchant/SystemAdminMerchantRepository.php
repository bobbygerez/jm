<?php namespace App\Repo\Merchant;

use App\Repo\BaseRepository;
use App\Repo\BaseInterface;
use App\Merchant;

class SystemAdminMerchantRepository extends BaseRepository implements MerchantInterface{

	public function __construct(){

		$this->modelName = new Merchant();
	}

	
}