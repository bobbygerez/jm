<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')
                ->on('users');
                $table->integer('unit_id')->unsigned()->nullable();
            $table->foreign('unit_id')->references('id')
                ->on('units');
            $table->integer('brand_id')->unsigned()->nullable();
            $table->foreign('brand_id')->references('id')
                ->on('brands');
            $table->integer('merchant_subcategory_id')->unsigned()->nullable();
            $table->foreign('merchant_subcategory_id')->references('id')
                ->on('merchant_subcategories');
            $table->string('model_number');
            $table->string('name');
            $table->string('desc');
            $table->integer('discount')->default(0);
            $table->integer('discount2')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
