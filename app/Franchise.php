<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    protected $table = 'franchise';
    protected $fillable = [

    	'created_by', 'name', 'desc', 'trade_id'
    ];
}
