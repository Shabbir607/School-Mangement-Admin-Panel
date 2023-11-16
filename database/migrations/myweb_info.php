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
        Schema::create('myweb_info', function (Blueprint $table) {
            $table->id();
            $table->string('name_thai');
            $table->string('name_english');
            $table->string('logo');
            $table->string('domain');
            $table->string('website');
            $table->string('google');
            $table->string('facebook');
            $table->string('keyword_english');
            $table->string('keyword_thai');
            $table->string('title_english');
            $table->string('title_thai');
            $table->string('desic_english');
            $table->string('disc_thai');

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
        Schema::dropIfExists('myweb_info');
    }
};
