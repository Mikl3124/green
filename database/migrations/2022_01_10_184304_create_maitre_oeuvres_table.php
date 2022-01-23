<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaitreOeuvresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maitre_oeuvres', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('adresse')->nullable();;
            $table->string('cp')->nullable();;
            $table->string('ville')->nullable();;
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maitre_oeuvres');
    }
}
