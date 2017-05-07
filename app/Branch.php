<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
   
   protected $table = 'branches';
   protected $fillable = [
   		'created_by', 'phone_no', 'mobile_no', 'reg_dti', 'reg_sec',
   		'current_country', 'current_province', 'current_city', 'current_brgy',
   		'perma_country', 'perma_province', 'perma_city', 'perma_brgy',
   		'contact_person_1', 'contact_person_2', 'ownership_type', 'tin',
   		'business_type'
   ];

   public function merchant(){

   		return $this->hasOne('App\Merchant', 'id', 'merchant_id');
   }

   public function products(){

   		return $this->belongsToMany('App\Product', 'branch_product', 'branch_id', 'product_id');
   }
}
