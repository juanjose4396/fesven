<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->timestamps();
        });

        DB::statement("INSERT INTO `categoria_eventos` (`descripcion`,`id`) VALUES ('Comercial','1')");
        DB::statement("INSERT INTO `categoria_eventos` (`descripcion`,`id`) VALUES ('Campañas Publicitarias','2')");
        DB::statement("INSERT INTO `categoria_eventos` (`descripcion`,`id`) VALUES ('Cultural Fiestas Folclóricas','3')");
        DB::statement("INSERT INTO `categoria_eventos` (`descripcion`,`id`) VALUES ('Organizacional','4')");


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categoria__eventos');
    }
}
