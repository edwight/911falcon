<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFechasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('fechas',function(Blueprint $table){
            $table->increments('id')->unsigned();
            $table->dateTime('startime_at');
            $table->dateTime('endtime_at');
            $table->string('roles_type');
            $table->integer('role_id')->unsigned();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // Schema::drop('fechas');
    }
}
