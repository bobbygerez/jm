<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    

    protected $table = 'maincategories';
    protected $fillable = [
    	'user_id', 'name', 'description'
    ];
}
