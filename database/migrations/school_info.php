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
        Schema::create('school_info', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->string('name_thai');
            $table->string('name_engli');
            $table->string('domain');
            $table->string('identi');          
            $table->string('address_thai');
            $table->string('address_engli');
            $table->string('finance');
            $table->string('Registration');
            $table->string('income');
            $table->string('student');
            $table->string('classroom');
            
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
        Schema::dropIfExists('school_info');
    }
};
