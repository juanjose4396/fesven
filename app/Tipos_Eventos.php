<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipos_Eventos extends Model
{
    protected $table="tipos_eventos";

    protected $fillable=['nombre','categoria_id'];
}
