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
            $table->text('descripcion');
            $table->Integer('organismo_id')->unsigned();

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
