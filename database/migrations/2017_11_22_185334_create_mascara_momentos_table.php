<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascaraMomentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascara_momentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->integer('sobre_id')->unsigned();
            $table->foreign('sobre_id')->references('id')->on('sobre_momentos');
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
        Schema::drop('mascara_momentos');
    }
}
