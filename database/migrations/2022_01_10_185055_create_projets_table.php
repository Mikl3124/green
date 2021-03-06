<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('maitre_ouvrage_id')->nullable();
            $table->foreign('maitre_ouvrage_id')->references('id')->on('maitre_ouvrages');
            $table->unsignedBigInteger('maitre_oeuvre_id')->nullable();
            $table->foreign('maitre_oeuvre_id')->references('id')->on('maitre_oeuvres');
            $table->unsignedBigInteger('pack_id')->nullable();
            $table->foreign('pack_id')->references('id')->on('packs');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('number')->nullable();
            $table->foreign('surface_id')->references('id')->on('surfaces');
            $table->unsignedBigInteger('surface_id')->nullable();
            $table->string('name');
            $table->boolean('different_ouvrage')->nullable();
            $table->string('adresse')->nullable();
            $table->string('cp')->nullable();
            $table->string('ville')->nullable();
            $table->string('ref_cadastrales')->nullable();
            $table->string('date_pc')->nullable();
            $table->string('emplacement')->nullable();
            $table->string('type')->nullable();
            $table->integer('progress')->nullable();
            $table->boolean('administratif_complete')->default(0);
            $table->boolean('surface_complete')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
