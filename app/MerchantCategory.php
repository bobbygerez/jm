<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MerchantCategory extends Model
{
    
    protected $table = 'merchantcategories';


    public function merchantsubcategory(){

    	return $this->hasMany('App\MerchantSubcategory', 'merchant_category_id', 'id');
    }
}
