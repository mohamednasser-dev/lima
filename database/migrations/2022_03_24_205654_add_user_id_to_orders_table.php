<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->uuid('uicode')->nullable()->after('id');
            $table->boolean('has_shipping')->default(false)->after('address_id');
            $table->unsignedBigInteger('user_id')->nullable()->after('uicode');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('uicode');
            $table->dropColumn('has_shipping');

            $table->dropForeign('orders_user_id_foreign');
            $table->dropIndex('orders_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
