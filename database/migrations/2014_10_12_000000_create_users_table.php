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
            $table->string('name');
            $table->string('apellidos');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telefono');
            $table->string('imagen');
            $table->string('rol');


            $table->rememberToken();
            $table->timestamps();
        });
        $pass=bcrypt(12345);
        DB::statement("INSERT INTO `users` (`name`,`apellidos`,`telefono`,`email`,`password`,`imagen`,`rol`) VALUES ('Manuel','Alvarez','3007624278','manuel@hotmail.com','$pass','/img/avatar.png','root')");


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
