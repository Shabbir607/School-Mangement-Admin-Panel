
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
        Schema::create('s_items', function (Blueprint $table) {
            $table->id();
            $table->string('category');                            
            $table->string('code');
            $table->string('brand_id');
            $table->string('picture');
            $table->string('product');
            $table->string('price');
            $table->string('english');
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
        Schema::dropIfExists('s_items');
    }
};

