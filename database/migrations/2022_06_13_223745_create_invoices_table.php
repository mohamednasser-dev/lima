<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_id');
            $table->string('invoice_key');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->bigInteger('subscription_history_id')->unsigned();
            $table->foreign('subscription_history_id')->references('id')->on('subscription_histories')->onDelete('restrict');
            $table->integer('status')->default(0);
            $table->integer('payment_id');
            $table->string('fawry_code')->nullable();
            $table->string('fawry_expire_date')->nullable();
            $table->integer('meeza_reference')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
