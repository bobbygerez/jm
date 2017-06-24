<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    
    protected $table = "merchants";

    protected $fillable = [

    	'created_by', 'merchant_id', 'phone_no', 'mobile_no', 'contact_person', 'status', 'name', 'website', 'email', 'registered_by_id', 'ownership_type_id', 'registration_no', 'date_registered'
    	
    ];

    public function users(){

    	return $this->belongsToMany('App\User', 'merchant_user', 'merchant_id', 'user_id');
    }

    public function branches(){

    	return $this->belongsToMany('App\Merchant', 'branch_merchant', 'merchant_id', 'branch_id');
    }

    public function photos(){

        return $this->morphMany('App\Photo', 'imageable');
    }

    public function trade(){

        return $this->hasOne('App\Trade', 'merchant_id', 'id');
    }
}
