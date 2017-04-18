<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = [

    	'user_id', 'merchantcategory_id', 'merchant_subcategory_id',
    	'model_number', 'name', 'unit_id', 'desc', 'discount'
    ];
}
