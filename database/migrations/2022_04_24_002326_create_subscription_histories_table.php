<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subscribe_type_id')->references('id')->on('subscribe_types')->onDelete('restrict');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name_ar')->comment('subscription name ar');
            $table->string('name_en')->comment('subscription name ar');
            $table->string('user_name')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->date('started_at');
            $table->date('ended_at');
            $table->double('cost')->default(0);
            $table->enum('type',['visa','cash','manual'])->default('cash');
            $table->tinyInteger('payment_status')->default(0);
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
        Schema::dropIfExists('subscription_histories');
    }
}
