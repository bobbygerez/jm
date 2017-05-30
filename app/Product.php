<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\ProductDataViewer;
use Carbon\Carbon;

class Product extends Model
{
    
    use ProductDataViewer;

    protected $fillable = [

    	'user_id', 'unit_id', 'brand_id', 'model_number', 'name',  'desc', 'discount', 'discount2'
    ];

    

    public function photos(){

    	return $this->morphMany('App\Photo', 'imageable');
    }

    public function user(){

        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function prices(){

        return $this->hasMany('App\Price', 'product_id', 'id');
    }

    public function quantities(){

        return $this->hasMany('App\Quantity', 'product_id', 'id');
    }

    public function merchantSubcategory(){

    	return $this->hasOne('App\MerchantSubcategory', 'id', 'merchant_subcategory_id');
    }

    public function mainCategory(){

    	return $this->belongsToMany('App\MainCategory', 'maincategory_product', 'maincategory_id', 'product_id');
    }

    public function unit(){

        return $this->hasOne('App\Unit', 'id', 'unit_id');
    }

    public function branches(){

        return $this->belongsToMany('App\Branch', 'branch_product', 'product_id', 'branch_id');
    }

    public function getDiscountAttribute($value){

        return $value . '%';
    }

    public function getNameAttribute($value){

        return str_slug($value);
    }

    public function getCreatedAtAttribute($value){

        return Carbon::parse($value)->toDayDateTimeString();
    }

    
}
