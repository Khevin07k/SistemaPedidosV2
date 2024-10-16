<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//Register
Route::post('/register', [AuthController::class, 'store']);
//Login
Route::post('/login',[AuthController::class,'login']);
//Logout
Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::apiResources(['users'=>AuthController::class]);
    Route::put('users',[UserController::class, 'update']);
    Route::post('logout',[AuthController::class, 'logout']);
});
Route::get('/listarMenu',[MenuController::class,"listarMenu"]);
