<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 100);
            $table->string('phone', 12);
            $table->text('direccion');
            $table->text('p_referencia');
            $table->text('descripcion');
            $table->dateTime('startime_at');
            $table->dateTime('endtime_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contactos');
    }
}
