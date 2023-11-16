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
        Schema::create('employee_list', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('picture');
            $table->string('asstant');
            $table->string('issue');
            $table->string('expire');
            $table->string('department');
            $table->string('work');
            $table->string('work_issue');
            $table->string('end_date');
            $table->string('contract');
            $table->string('contract_issue');
            $table->string('contract_date');
            $table->string('teaching');
            $table->string('teaching_issure');
            $table->string('teaching_end');
            $table->string('school');
            $table->string('school_issure');
            $table->string('school_end');
            $table->string('subject');
            $table->string('group');
            $table->string('nationality');          
            $table->string('religion');
            $table->string('employee_id');
            $table->string('password');
            $table->string('phone_no');
            $table->string('card_number');
            $table->string('passpord_number');
            $table->string('visa_number');
            $table->string('address');
            $table->string('classroom');
            $table->string('homeroom');

            
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
        Schema::dropIfExists('employee_list');
    }
};
