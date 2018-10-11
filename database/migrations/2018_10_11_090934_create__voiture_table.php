<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoitureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Voitures', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('nbKm');
            $table->DATE('date_debut');
            $table->DATE('date_fin')->nullable();
            $table->integer('nbKmPret');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_voiture');
    }
}
