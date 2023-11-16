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
        Schema::create('myweb_contect', function (Blueprint $table) {
             $table->id();
            $table->string('logo');
            $table->string('category');
            $table->string('domain');
            $table->string('expire');
            $table->string('name_thai');
            $table->string('name_english');
            $table->string('title_thai');
            $table->string('title_english');
            $table->string('tag_thai');
            $table->string('tag_english');
            $table->string('contant_thai');
            $table->string('contant_english');
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
        Schema::dropIfExists('myweb_contect');
    }
};
