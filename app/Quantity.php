<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Quantity extends Model
{
    
    protected $table = 'quantities';

    protected $fillable = [

    	'product_id', 'qty'

    ];

    public function getCreatedAtAttribute($value){

    	return Carbon::parse($value)->toDayDateTimeString();

    }
}
