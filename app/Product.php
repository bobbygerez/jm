<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\ProductDataViewer;

class Product extends Model
{
    
    use ProductDataViewer;

    protected $fillable = [

    	'user_id', 'model_number', 'name', 'unit_id', 'desc', 'discount'
    ];

    

    public function photos(){

    	return $this->morphMany('App\Photo', 'imageable');
    }

    public function merchantSubcategory(){

    	return $this->belongsToMany('App\MerchantSubcategory', 'merchant_subcategory_product', 'merchant_subcategory_id', 'product_id');
    }

    public function mainCategory(){

    	return $this->belongsToMany('App\MainCategory', 'maincategory_product', 'maincategory_id', 'product_id');
    }

    public function unit(){

        return $this->hasOne('App\Unit', 'id', 'unit_id');
    }

    public function getDiscountAttribute($value){

        return $value . '%';
    }
}
