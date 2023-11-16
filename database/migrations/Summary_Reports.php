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
        Schema::create('summary_reports', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('product_name');
            $table->string('price');
            $table->string('bf');  
            $table->string('import');  
            $table->string('sale');  
            $table->string('cn');
            $table->string('broken');  
            $table->string('internal');
            $table->string('total'); 

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
        Schema::dropIfExists('summary_reports');
    }
};
