<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLlamadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('llamadas',function(Blueprint $table){
            $table->Increments('id')->unsigned();
            $table->integer('falsas')->nullable();
            $table->integer('quejas')->nullable();
            $table->integer('registradas')->nullable();
            $table->timestamps();  
            //$table->text('descripcion'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('llamadas');
    }
}
