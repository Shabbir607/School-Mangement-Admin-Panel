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
        Schema::create('purchase_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('date');
            $table->string('approve_1');
            $table->string('description');
            $table->string('order');
            $table->string('qty');
            $table->string('qty_price');
            $table->string('status');            
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
        Schema::dropIfExists('purchase_forms');
    }
};
