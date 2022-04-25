<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('name_ar');
            $table->text('name_en');
            $table->longText('body_ar')->nullable();
            $table->longText('body_en')->nullable();
            $table->enum('type',['video','article','voice'])->default('video');
            $table->string('video')->nullable();
            $table->string('image')->nullable();
            $table->string('voice')->nullable();
            $table->tinyInteger('free')->default(0);
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('restrict');
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('posts');
    }
}
