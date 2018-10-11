<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePossedeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Possede', function (Blueprint $table) {
            $table->increments('id');
            $table->string('visiteur_id', 4);
            $table->integer('voiture_id')->unsigned();
            $table->foreign('visiteur_id')->references('id')->on('Visiteurs');
            $table->foreign('voiture_id')->references('id')->on('Voitures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Possede');
    }
}
