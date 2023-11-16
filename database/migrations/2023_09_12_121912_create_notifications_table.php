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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('days');
            $table->string('visa');
            $table->string('work_permit');
            $table->string('teaching_li');          
            $table->string('passport');
            $table->string('id_card');
            $table->string('absent');
            $table->string('mail');
            $table->string('visa_msg');
            $table->string('days_msg');
            $table->string('work_msg');
            $table->string('teaching_msg');
            $table->string('passport_msg');
            $table->string('id_card_msg');
            $table->string('absent_msg');
            
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
        Schema::dropIfExists('notifications');
    }
};
