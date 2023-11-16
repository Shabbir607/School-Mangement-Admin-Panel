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
        Schema::create('school_later', function (Blueprint $table) {
            $table->id();
            $table->string('cancel_visa');
            $table->string('resign');
            $table->string('visa_extension');
            $table->string('b_replacement_cover');
            $table->string('O_replacement_cover');          
            $table->string('teacher_visa');
            $table->string('personnel_visa');
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
        Schema::dropIfExists('school_later');
    }
};
