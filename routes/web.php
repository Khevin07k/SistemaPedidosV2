<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\UserController;
use App\Models\Cliente;
use Illuminate\Support\Facades\Route;


/*Administracion*/
Route::resource('/',HomeController::class);
Route::resource('/restaurante',RestauranteController::class);
Route::resource('/empleado',EmpleadoController::class);
Route::resource('/menu',MenuController::class);
Route::resource('/usuario',UserController::class);

Route::view('login','usuario.login')->name('login');
Route::view('register','usuario.register')->name('register');
//Route::get('/login', 'LoginController@index')->name('login');
//Route::post('/login',[LoginController::class,'login']);
//Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/Agregar',[LoginController::class,'register'])->name('Agregar');
Route::resource('/persona',PersonaController::class);
Route::resource('/cliente',Cliente::class);
Route::resource('/pedido', PedidoController::class);

/*Usuario*/

Route::get('/Res',function (){
    return view('pedido.platos');
});
Route::get('/platos/{param}',function ($param){
    return view('pedido.platos',compact('param'));
});

Route::get('/listarMenu',[MenuController::class,"listarMenu"]);
