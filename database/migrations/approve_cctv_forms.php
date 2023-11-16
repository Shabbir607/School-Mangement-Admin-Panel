

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
        Schema::create('approve_cctv_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('approve_1');
            $table->string('approve_2');
            $table->string('approve_3');            
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
        Schema::dropIfExists('approve_cctv_forms');
         $table->dropColumn(['deleted_at']);
    }
};
