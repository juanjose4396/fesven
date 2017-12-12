<?php


Route::get('/', function () {

    /*
     * Auth, clase que se genera para mantener el usuario activo
     * check() metodo que me retorna true si está activo y false si no
     * */

    if (Auth::check())
    {
        return view('home');
    }
    else
        return view('auth.login');

});


Route::get('error', function(){
    abort(500);
});


Route::group(['prefix' => 'admin','middleware' => 'auth',], function () {

    Route::auth();
    //Route::get('/admin', 'HomeController@index');
    Route::resource('home/inicio','homeController');

    //----------------- rutas del usuario
    Route::resource('users','UsersController');
    Route::get('users/{id}/destroy', ['uses' => 'UsersController@destroy', 'as' => 'admin.user.destroy']);
    Route::get('users/{id}/trabajador',['uses'=> 'UsersController@createT','as'=> 'admin.users.createT']);
    Route::post('users/storeT',['uses'=> 'UsersController@storeT','as'=> 'admin.users.storeT']);
    Route::get('users/{id}/edit',['uses'=>'UsersController@edit','as'=>'admin.users.edit']);
    Route::post('user/{id}/update',['uses'=>'UsersController@update','as'=>'admin.users.update']);






    //-------------- rutas de los eventos

    Route::resource('eventos','EventosController');

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/admin', 'HomeController@index');

});
