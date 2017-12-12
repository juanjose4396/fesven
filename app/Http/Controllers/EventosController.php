<?php

namespace App\Http\Controllers;

use App\Tipos_Eventos;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Evento;
use App\UbicacionesEventos;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos=Evento::all();

        return view('admin/eventos/index')->with('eventos',$eventos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos= Tipos_Eventos::all();
        return view('admin/eventos/create')->with('tipos',$tipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if ( $request->file('portada')) {

            //se nombra la imagen y se me mueve al directorio

            $file = $request->file('portada');
            $name = $request->nombre . time() . "." . $file->getClientOriginalExtension();
            $path = public_path() . "/imagenes_eventos/";
            $file->move($path, $name);

            $eventos= new Evento();
            $eventos->nombre=$request->nombre;
            $eventos->descripcion=$request->descripcion_corta;
            $eventos->fecha_inicio=$request->fecha_inicio;
            $eventos->fecha_fin=$request->fecha_fin;
            $eventos->logo=$name;
            $eventos->frase="hola";
            $eventos->tipo_evento=$request->tipo_de_evento;
            $eventos->save();

            $ubicacion= new UbicacionesEventos();
            $ubicacion->pais=$request->pais;
            $ubicacion->departamento=$request->estado;
            $ubicacion->ciudad=$request->ciudad;
            $ubicacion->direccion=$request->direccion;
            $ubicacion->evento_id=$eventos->id;
            $ubicacion->save();


            dd(Evento::all());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
