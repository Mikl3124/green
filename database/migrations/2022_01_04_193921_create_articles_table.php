<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 128);
            $table->string('status', 128);
            $table->unsignedBigInteger('user_id')->index()->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->string('categorie_id')->index()->references('id')->on('categories');
            $table->string('slug', 128)->unique();
            $table->text('meta-description');
            $table->unsignedBigInteger('image_id')->index()->references('id')->on('images');
            $table->text('video_url')->nullable();
            $table->text('full_text_part_1');
            $table->text('full_text_part_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
