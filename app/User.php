<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'member_id', 'acount_no', 'card_no', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles(){

        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');

    }

    public function cardNos(){

        return $this->hasMany('App\CardNo', 'id', 'user_id');
    }

    public function contactData(){

        return $this->hasOne('App\ContaData', 'contact_data_id', 'id');
    }

    
}
