
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
        Schema::create('pro_items', function (Blueprint $table) {
            $table->id();
            $table->string('created_id');
            $table->string('category');                            
            $table->string('code');
            $table->string('brand_id');
            $table->string('picture');
            $table->string('product');
            $table->integer('price');
            $table->string('name_thi');
            $table->string('name_engl');
            $table->string('title_thi');
            $table->string('title_engl');
            $table->string('disc_thi');
            $table->string('disc_engl');

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
        Schema::dropIfExists('pro_items');
    }
};

