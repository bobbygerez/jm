<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function view(User $user){

        $policies = $user->policies->map(function($item, $key){

            return $item->name;
        });

      return in_array('view', $policies->toArray());
    }
}
