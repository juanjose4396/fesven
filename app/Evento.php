<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table="eventos";

    protected $fillable=['nombre','descripcion','fecha_inicio','fecha_fin','logo','frase','tipo_evento'];


    public function ubicacion(){

        return $this->hasOne('App\UbicacionesEventos');

    }

}
