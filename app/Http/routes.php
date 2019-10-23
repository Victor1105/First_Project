<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/ 

Route::get('/listado', 'ListadoController@index');
Route::get('/formularios', 'FormularioController@index');
Route::get('/menu', 'MenuController@index');
Route::get('/', 'HomeController@index');

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/registro', function () {
    return view('registro.registro');
});

/*Route::get('/menu', function ($nombre_administrador="Viviana Saavedra", $perfil= 'Cirujano') {
    return view('menu.menu')->with('nombre_administrador', $nombre_administrador)
                            ->with('perfil', $perfil);
    })->where([
        'nombre_administrador' => '[A-Za-z]+',
        'edad' => '[0-9]+'
        ]);
*/


//forma larga de enviar variables al template
/*Route::get('/menu', function ($nombre_administrador="Víctor Tobar") {
    return view('menu.menu', array(
        "nombre_administrador" => $nombre_administrador
    ));
});*/



Route::group(['middleware' => 'web'], function () {
    Route::get('dashboards', 'Desktop\DashboardsController@index');

});



