<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('website');
            $table->string('email');
            $table->string('phone_no');
            $table->string('mobile_no');
            $table->string('reg_dti');
            $table->string('reg_sec');
            $table->integer('current_country')->nullable();
            $table->integer('current_province')->nullable();
            $table->integer('current_city')->nullable();
            $table->integer('current_brgy')->nullable();
             $table->integer('perma_country')->nullable();
            $table->integer('perma_province')->nullable();
            $table->integer('perma_city')->nullable();
            $table->integer('perma_brgy')->nullable();
            $table->string('contact_person_1');
            $table->string('contact_person_2');
            $table->string('ownership_type');
            $table->string('tin');
            $table->integer('business_type');
            $table->string('desc');
            $table->integer('branch_id');
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
        Schema::dropIfExists('merchants');
    }
}
