<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    
    protected $table = 'address';

    protected $fillable = ['country_id', 'region_id', 'province_id', 'municipality_id', 'barangay_id', 'street'];
}
