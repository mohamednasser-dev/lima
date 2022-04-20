<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_products', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title_ar');
            $table->string('title_en');
            $table->string('count_ar');
            $table->string('count_en');
            $table->double('price');
            $table->double('discount')->default(0)->nullable();
            $table->integer('quantity');
            $table->foreignId('brand_id')->constrained('brands')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brand_products');
    }
}
