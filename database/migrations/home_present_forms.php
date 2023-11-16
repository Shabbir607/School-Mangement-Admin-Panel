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
        Schema::create('home_present_forms', function (Blueprint $table) {
            $table->id();
            $table->date('task_date');
            $table->string('name');
            $table->string('time_in');
            $table->string('time_out');
            $table->text('description')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('home_present_forms');
    }
};

