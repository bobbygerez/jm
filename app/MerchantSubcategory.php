<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MerchantSubcategory extends Model
{
    

    protected $table = 'merchant_subcategories';

    protected $fillable = [

    	'merchant_category_id', 'name', 'desc'
    ];
}
