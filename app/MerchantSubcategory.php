<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MerchantSubcategory extends Model
{
    

    protected $table = 'merchant_subcategories';

    protected $fillable = [

    	'merchant_category_id', 'name', 'desc'
    ];

    public function products(){

    	return $this->belongsToMany('App\Product', 'merchant_subcategory_product', 'merchant_subcategory_id', 'product_id');
    }

    public function merchantCategory(){

    	return $this->hasMany('App\MerchantCategory', 'id', 'merchant_category_id');
    }
}
