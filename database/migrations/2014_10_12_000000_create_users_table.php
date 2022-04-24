<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->nullable()->unique();
            $table->string('password');
            $table->enum('status',['active','unactive'])->default('active');
            $table->integer('subscriber')->default(0);
            $table->enum('sms_verified',['0','1'])->default('0');
            $table->string('image')->nullable()->default('default.png');
            $table->foreignId('city_id')->references('id')->on('cities')->onDelete('restrict');
            $table->timestamp('subscription_ended_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
