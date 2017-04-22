<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MerchantCategory extends Model
{
    
    protected $table = 'merchantcategories';


    public function merchantSubcategory(){

    	return $this->hasMany('App\MerchantSubcategory', 'merchant_category_id', 'id');
    }

    public function products(){

    	return $this->belongsToMany('App\Product', 'merchant_category_product', 'merchant_category_id', 'product_id');
    }
}
