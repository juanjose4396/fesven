<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHastagMomentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hastag_momentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('momento_id')->unsigned();
            $table->foreign('momento_id')->references('id')->on('momentos');

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
        Schema::drop('hastag_momentos');
    }
}
