<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('created_by')->unsigned()->nullable();
            $table->foreign('created_by')->references('id')
                ->on('users');
            $table->integer('merchant_id')->unsigned()->nullable();
            $table->foreign('merchant_id')->references('id')
                ->on('merchants');
            $table->string('phone_no');
            $table->string('mobile_no');
            $table->string('reg_dti')->nullable();
            $table->string('reg_sec')->nullable();
            $table->integer('current_country')->nullable();
            $table->integer('current_province')->nullable();
            $table->integer('current_city')->nullable();
            $table->integer('current_brgy')->nullable();
            $table->integer('perma_country')->nullable();
            $table->integer('perma_province')->nullable();
            $table->integer('perma_city')->nullable();
            $table->integer('perma_brgy')->nullable();
            $table->string('contact_person_1')->nullable();
            $table->string('contact_person_2')->nullable();
            $table->string('ownership_type')->nullable();
            $table->string('tin')->nullable();
            $table->integer('business_type')->nullable();
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
        Schema::dropIfExists('branches');
    }
}
