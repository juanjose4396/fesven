<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaMomentosFavoritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_momentos_favoritos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_momentos_id')->unsigned();
            $table->foreign('categoria_momentos_id')->references('id')->on('categoria_momentos');
            $table->integer('cuenta_id')->unsigned();
            $table->foreign('cuenta_id')->references('id')->on('cuentas');
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
        Schema::drop('categoria_momentos_favoritos');
    }
}
