<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Bodega;
use App\Inventario;
use JavaScript;
use DB;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mesesito($fecha){


        list($año, $mes) = preg_split('[-]', $fecha);
        $fechaNueva="";
        if ($mes == "1" ||$mes == "2"||$mes == "3" ||$mes == "4" ||$mes == "5" ||$mes == "6" ||$mes == "7" ||
            $mes == "8" ||$mes == "9" ){

            $mes='0'.$mes;

        }
        $fechaNueva=$año.'-'.$mes;
        return $fechaNueva;


    }
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        /*
        $carbon = new \Carbon\Carbon();
        $date = $carbon->now('America/Bogota');
        $date=$date->format('dd-mm-Y');



        list($mes, $día, $año) = preg_split('[-]', $date);
        $año=$año-7;

        $bodegas= Bodega::select('id')->where('bodega_id','=',1)->get();
        $fechas= array();
        $totalB= array();
        for ($i=0;$i< sizeof($bodegas);$i++){

            $inventario=Inventario::where([
                ['bodega_origen', '=', $bodegas[$i]->id],
                ['bodega_destino', '=', '2'],])->whereYear('fecha','>',$año)->orderBy('fecha','ASC');
            $inventario= $inventario->select(DB::raw('SUM(valor * cantidad) as `valor`'),DB::raw("CONCAT_WS('-',YEAR(fecha),MONTH(fecha) ) as `monthyear`"),DB::raw('bodegas.nombre'))
                ->groupby('monthyear')->join('bodegas','bodegas.id','=','inventarios.bodega_origen')->get();
            $total=Inventario::where([
                ['bodega_origen', '=', $bodegas[$i]->id],
                ['bodega_destino', '=', '2'],])->whereYear('fecha','>',$año)->orderBy('fecha','ASC');
            $total= $total->select(DB::raw('SUM(valor * cantidad) as `valor`'),DB::raw('bodegas.nombre'))
                ->groupby('bodegas.id')->join('bodegas','bodegas.id','=','inventarios.bodega_origen')->get();
            for ($j=0;$j < sizeof($inventario);$j++){

                $inventario[$j]->monthyear=$this->mesesito($inventario[$j]->monthyear);

            }
            array_push($totalB,$total);
            array_push($fechas,$inventario);
        }

       // dd($fechas);

        JavaScript::put([
           'arreglo'=>$fechas
        ]);
        */

        return view('home');
    }
}