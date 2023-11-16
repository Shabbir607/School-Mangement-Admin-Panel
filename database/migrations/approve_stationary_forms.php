<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approve_stationary_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('date');
            $table->string('approve_1');
            $table->string('approve_2');
            $table->string('approve_3'); 

            //added from ssale model or home_Stationary view 
            $table->unsignedBigInteger('ssaleId');
            $table->string('bill'); 
            $table->string('companyID');
            $table->string('productId');
            $table->string('status');  
            $table->string('description');
            $table->string('saleQty');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('approve_stationary_forms');
    }
};
