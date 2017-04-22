<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantSubcategoryProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant_subcategory_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('merchant_subcategory_id')->unsigned()->nullable();
            $table->foreign('merchant_subcategory_id')->references('id')
                ->on('merchant_subcategories');
            $table->integer('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')
                ->on('products');
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
        Schema::dropIfExists('merchant_subcategory_product');
    }
}
