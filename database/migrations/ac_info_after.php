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
        Schema::create('ac_info_after', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->string('subject');
            $table->string('total_hour');
            $table->string('hour_day');
            $table->string('music');
            $table->string('student');
            $table->string('receipt_number');
            $table->string('receipt_date');
            $table->string('price');
            $table->string('teacher');
            $table->string('note');
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
        Schema::dropIfExists('ac_info_after');
    }
};
