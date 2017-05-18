<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Product\AdminProductController;
use App\Http\Controllers\Product\ApiProductController;
use App\Http\Controllers\Product\BranchManagerProductController;
use App\Repo\Product\ProductInterface;
use App\Repo\Product\ProductRepository;
use App\Repo\Product\BranchManagerProductRepository;
class ProductServiceProvider extends ServiceProvider
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
        

          $this->app->when(ApiProductController::class)
          ->needs(ProductInterface::class)
          ->give(ProductRepository::class);

           $this->app->when(BranchManagerProductController::class)
          ->needs(ProductInterface::class)
          ->give(BranchManagerProductRepository::class);
    }
}
