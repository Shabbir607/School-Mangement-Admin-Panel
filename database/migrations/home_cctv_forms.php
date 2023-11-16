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
        Schema::create('home_cctv_forms', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('time');
            $table->string('dvr');
            $table->string('channel');
            $table->string('note'); 
            $table->string('picture'); 
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
        Schema::dropIfExists('home_cctv_forms');
    }
};
