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
        Schema::create('home_book', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('active');
            $table->string('note');
            $table->string('picture');
            $table->string('fan');
            $table->string('chair');
            $table->string('light');
            $table->string('time');
            $table->string('other');
            $table->string('air');
            $table->string('room');
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
