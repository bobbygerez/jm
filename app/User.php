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
       'contact_data_id', 'personal_data_id', 'member_id', 'account_no', 'email',
       'password', 'status'
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

        return $this->hasOne('App\ContactData', 'id', 'contact_data_id');
    }

    public function personalData(){

        return $this->hasOne('App\PersonalData', 'id', 'personal_data_id');
    }

    public function merchants(){

        return $this->belongsToMany('App\Merchant', 'merchant_user', 'user_id', 'merchant_id');
    }  

    public function branches(){

        return $this->belongsToMany('App\Branch', 'branch_user', 'user_id', 'branch_id');
    }

    
}
