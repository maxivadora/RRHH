<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Models\Puestos;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('empleados', 'EmpleadosController');

Route::resource('puestos', 'PuestosController');

Route::get('/organigrama', 'OrganigramasController@index');

Route::get('/initData', function(){
	$puestos = Puestos::all();
        // foreach ($puestos as $puesto) {
        //     $puesto->empleados;
        //     foreach ($puesto->aCargoDe as $acargode){
        //         $acargode->empleados;
        //     }//por el momento esto anda..... busca los puestos y los empleados de sus puestos.
        // }
        return response()->json($puestos);
});

Route::get('/{id}/empleados', function($id){
	$puesto = App\Models\Puestos::find($id);
	return response()->json($puesto->empleados);
});
