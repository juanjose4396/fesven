<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_captura');
            $table->string('descripcion');
            $table->string('contenido');
            $table->integer('likes');
            $table->integer('mascara_evento_id')->unsigned();
            $table->foreign('mascara_evento_id')->references('id')->on('mascara_eventos');
            $table->integer('mascara_momento_id')->unsigned();
            $table->foreign('mascara_momento_id')->references('id')->on('mascara_momentos');

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
        Schema::drop('publicaciones');
    }
}
