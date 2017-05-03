<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    
    protected $table = 'prices';

    public function scopeIsPrimary($query){

    	$result = $query->where('is_primary', 1)->first();

    	if($result){

    		return number_format($result->price, 2, '.', ',');
    	}
    }



}
