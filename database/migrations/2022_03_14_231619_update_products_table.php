<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('brand_products', function (Blueprint $table) {
            if(!Schema::hasColumn('brand_products', 'body_ar'))
                $table->text('body_ar')->nullable();
            
            if(!Schema::hasColumn('brand_products', 'body_en'))
                $table->text('body_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('brand_products', function (Blueprint $table) {
            $table->dropColumn('body_ar');
            $table->dropColumn('body_en');
        });
    }
}
