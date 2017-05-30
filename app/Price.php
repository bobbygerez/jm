<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Price extends Model
{
    
    protected $table = 'prices';
    protected $fillable = [

        'product_id', 'price', 'is_primary'
    ];

    public function scopeIsPrimary($query, $productId){


    	$result = $query->where('is_primary', 1)
            ->where('product_id', $productId)
            ->first();

    	if($result){

            $price = str_replace(',', '', $result->price);
            
    		return number_format($price, 2, '.', ',');
    	}
        else{

            return '0.00';
        }
    }


    public function getPriceAttribute($value){

    	return number_format($value, 2, '.', ',');
    }

    public function getCreatedAtAttribute($value){

        return Carbon::parse($value)->toDayDateTimeString();

    }
}
