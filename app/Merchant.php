<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    
    protected $table = "merchants";

    protected $fillable = [

    	'created_by', 'name', 'website', 'email'
    	
    ];

    public function users(){

    	return $this->belongsToMany('App\User', 'merchant_user', 'merchant_id', 'user_id');
    }

    public function branches(){

    	return $this->belongsToMany('App\Merchant', 'branch_merchant', 'merchant_id', 'branch_id');
    }
}
