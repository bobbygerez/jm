<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repo\Role\RoleInterface;
use App\Repo\Role\RoleRepository;
use App\Http\Controllers\User\AdminController;
use App\Http\Controllers\Role\AdminRoleController;

class RoleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

     $this->app->when(AdminController::class)
          ->needs(RoleInterface::class)
          ->give(RoleRepository::class);

      $this->app->when(AdminRoleController::class)
          ->needs(RoleInterface::class)
          ->give(RoleRepository::class);
    }
}
