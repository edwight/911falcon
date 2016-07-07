<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->string('slug', 60);
            $table->string('email')->unique();
            $table->string('phone', 12)->unique()->nullable();
            $table->enum('roles', ['operador', 'despachador','supervisor','admin','superadmin']);
            $table->string('password');
            $table->integer('grupo_id');
            $table->rememberToken();
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
