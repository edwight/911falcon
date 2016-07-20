<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones',function(Blueprint $table){
            $table->Increments('id')->unsigned();
            $table->text('despcricion');
            $table->text('ubicacion');
            $table->text('preferencia');
            $table->integer('parroquia_id');
            $table->integer('localidad_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('direcciones');
    }
}
