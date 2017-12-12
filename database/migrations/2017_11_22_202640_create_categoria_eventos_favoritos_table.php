<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaEventosFavoritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_eventos_favoritos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_eventos_id')->unsigned();
            $table->foreign('categoria_eventos_id')->references('id')->on('categoria_eventos');
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
        Schema::drop('categoria_eventos_favoritos');
    }
}
