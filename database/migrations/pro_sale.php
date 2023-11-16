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
        Schema::create('pro_sale', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('product_name');
            $table->string('companyID');
            $table->string('branchID');
            $table->string('billNumber');
            $table->string('product_code');
            $table->integer('qty');
            $table->integer('total');
            $table->string('saleType');
            $table->string('teacher');
            $table->string('createIP');
            $table->string('createID');
            $table->string('description');
            $table->string('status')->default('waiting');
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
        Schema::dropIfExists('pro_sale');
    }
};
