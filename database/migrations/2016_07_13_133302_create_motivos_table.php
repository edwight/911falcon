<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motivos',function(Blueprint $table){
            $table->Increments('id')->unsigned();
            $table->string('motivo', 60)->unique();
            $table->boolean('activo');
            $table->text('descripcion');
            //$table->Integer('organismo_id')->unsigned();
        });
        Schema::create('motivo_municipio', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->Increments('id')->unsigned();
            $table->integer('cantidad')->unsigned()->nullable();
            $table->integer('motivo_id')->unsigned()->nullable();
            $table->integer('municipio_id')->unsigned()->nullable();
            $table->integer('parroquia_id')->unsigned()->nullable();
            $table->integer('localidad_id')->unsigned()->nullable();
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
        Schema::drop('motivos');
    }
}
