<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganismosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organismos', function(Blueprint $table){
            $table->increments('id');
            $table->string('siglas', 60);
            $table->string('nombre', 120);
            $table->string('telefono', 60);
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('organismos');
    }
}
