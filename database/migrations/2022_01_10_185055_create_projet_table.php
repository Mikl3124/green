<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projet', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('maitre_ouvrage_id')->index()->references('id')->on('maitre_ouvrage');
            $table->unsignedBigInteger('maitre_oeuvre_id')->index()->references('id')->on('maitre_oeuvre');
            $table->string('number');
            $table->string('name');
            $table->string('adresse');
            $table->string('ref_cadastrales');
            $table->string('date_pc');
            $table->string('emplacement');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projet');
    }
}
