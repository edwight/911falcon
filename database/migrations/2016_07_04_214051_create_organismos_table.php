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
            $table->engine = 'InnoDB';
            $table->Increments('id');
            $table->string('siglas', 60);
            $table->string('nombre', 120);
            $table->string('telefono', 60);
            $table->timestamps();
        });

        Schema::create('contacto_organismo', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->Increments('id')->unsigned();
            $table->integer('contacto_id')->unsigned()->nullable();
            $table->integer('organismo_id')->unsigned()->nullable();
            $table->timestamps(); 
            //$table->foreign('contacto_id')->references('id')->on('contactos');
            //$table->foreign('organismo_id')->references('id')->on('organismos');
            
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
