<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    

    protected $table = 'maincategories';

    protected $fillable = [
    	'user_id', 'name', 'description'
    ];


    public function merchantcategory(){

    	return $this->hasMany('App\MerchantCategory', 'maincategory_id', 'id');
    }
}
