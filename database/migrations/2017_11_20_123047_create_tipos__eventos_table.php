<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categoria_eventos');
            $table->timestamps();
        });
        DB::statement("INSERT INTO `tipos_eventos` (`id`,`nombre`,`categoria_id`) VALUES ('1','Evento Cinematográfico','1')");
        DB::statement("INSERT INTO `tipos_eventos` (`id`,`nombre`,`categoria_id`) VALUES ('2','Evento Musical','1')");
        DB::statement("INSERT INTO `tipos_eventos` (`id`,`nombre`,`categoria_id`) VALUES ('3','Evento de Moda','1')");
        DB::statement("INSERT INTO `tipos_eventos` (`id`,`nombre`,`categoria_id`) VALUES ('4','Evento Deportivo','1')");

        DB::statement("INSERT INTO `tipos_eventos` (`id`,`nombre`,`categoria_id`) VALUES ('5','Evento de Marca','2')");
        DB::statement("INSERT INTO `tipos_eventos` (`id`,`nombre`,`categoria_id`) VALUES ('6','Evento Comercial','2')");

        DB::statement("INSERT INTO `tipos_eventos` (`id`,`nombre`,`categoria_id`) VALUES ('7','Feria/Fiesta Patronal','3')");
        DB::statement("INSERT INTO `tipos_eventos` (`id`,`nombre`,`categoria_id`) VALUES ('8','Fiesta de Aniversario','3')");
        DB::statement("INSERT INTO `tipos_eventos` (`id`,`nombre`,`categoria_id`) VALUES ('9','Fiesta Religiosa','3')");

        DB::statement("INSERT INTO `tipos_eventos` (`id`,`nombre`,`categoria_id`) VALUES ('10',' Evento Académico/Científico','4')");
        DB::statement("INSERT INTO `tipos_eventos` (`id`,`nombre`,`categoria_id`) VALUES ('11',' Evento Tecnológico','4')");
        DB::statement("INSERT INTO `tipos_eventos` (`id`,`nombre`,`categoria_id`) VALUES ('12',' Evento Empresarial','4')");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipos__eventos');
    }
}
