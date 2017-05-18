<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\User\AdminController;
use App\Http\Controllers\Product\BranchManagerProductController;
use App\Repo\User\UserInterface;
use App\Repo\User\DashboardRepository;
use App\Repo\User\AdminRepository;
use App\Repo\User\BranchManagerRepository;

class UserServiceProvider extends ServiceProvider
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
        $this->app->when(DashboardController::class)
          ->needs(UserInterface::class)
          ->give(DashboardRepository::class);

        $this->app->when(AdminController::class)
          ->needs(UserInterface::class)
          ->give(AdminRepository::class);

        $this->app->when(BranchManagerProductController::class)
          ->needs(UserInterface::class)
          ->give(BranchManagerRepository::class);
    }
}
