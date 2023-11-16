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
        Schema::create('s_approve', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('code');
            $table->string('qty');
            $table->string('price');
            $table->string('supplier');
            $table->string('invoice');
            $table->string('Status')->default('waiting');
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
        Schema::dropIfExists('s_approve');
    }
};
