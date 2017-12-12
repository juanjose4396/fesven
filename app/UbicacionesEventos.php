<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UbicacionesEventos extends Model
{
    protected $table = "ubicaciones_eventos";

    public function eventos(){

        return $this->belongsTo('App\Eventos');

    }
}
