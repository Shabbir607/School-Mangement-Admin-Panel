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
        Schema::create('pro_imports', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('code');
            $table->string('status')->default('waiting');
            $table->string('qty');
            $table->string('price');
            $table->string('supplier');
            $table->string('invoice');
            $table->string('createID');
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
        Schema::dropIfExists('pro_imports');
    }
   
};
