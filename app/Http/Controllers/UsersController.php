<?php

namespace App\Http\Controllers;
use Validator;
use App\User;
use Illuminate\Http\Request;
use App\Bodega;
usE App\Cliente;

use App\Http\Requests\ClienteRequest;
use App\Http\Requests\UserRequest;

use App\Http\Requests;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users=User::all();



       return view('admin/users/index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/users/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        if ( $request->file('imagen')) {

            //se nombra la imagen y se me mueve al directorio

            $file = $request->file('imagen');
            $name = $request->nombre_b . time() . "." . $file->getClientOriginalExtension();
            $path = public_path() . "/";
            $file->move($path, $name);

            $user = new User();


            $user->name = $request->nombre;
            $user->apellidos = $request->apellidos;
            $user->telefono = $request->telefono;



            $user->password = bcrypt($request->password);


            $user->rol = "usuario";

            $user->imagen = $name;
            $user->save();

            return redirect()->route('admin.users.index');
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
        $users = User::where('user_id', $id)->get();
        $cliente= User::find($id);


        return view('admin/users/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::find($id);

        return view('admin/users/update')->with('user',$user);
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
        $user= $request->user();
        $user->name= $request->nombre;
        $user->apellidos = $request->apellido;
        $user->cedula= $request->cc;
        $user->email = $request->email;
        $user->telefono= $request->telefono;
        $user->fecha_corte= $request->fecha;

        if ($request->password != ""){

            $user->password= bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('admin.users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // función find() solo busca por "id´s" para buscar por otros campos se utiliza where()

        $user=User::find($id);

        if ($user->estado == 0){
            $user->estado=1;
            $user->save();
        }
        elseif ($user->estado == 1){
            $user->estado = 0;
            $user->save();
        }

       return redirect()->route('admin.users.index');

    }

    public function createT($id){

        return view('admin/users/createTrabajador')->with('id',$id);

    }

    public function storeT(UserRequest $request){


        //Se crea el usuario y se agregan los campos

            $user = new User();


            $user->name = $request->nombre;
            $user->apellidos = $request->apellidos;
            $user->telefono = $request->telefono;

            if ($request->email == "") {
                $user->email = $request->telefono;
            } else {
                $user->email = $request->email;
            }

            $user->password = bcrypt($request->password);
            $user->fecha_corte =" ";

            $user->cedula = $request->cedula;
            $user->rol = $request->rol;
            $user->user_id = $request->id_padre;
            $cliente = User::find($request->id_padre);
            $user->imagen = $cliente->imagen;
            $user->save();

        return redirect()->route('admin.users.index');

    }
}
