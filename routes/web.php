<?php

use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\difusionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MensajesController;


Route::get('/',[WelcomeController::class,'index']) -> name('welcome');

Route::view('/login','auth.login') -> name('login');    
Route::view('/register','auth.register') -> name('register');    
Route::resource('mensajes',MensajesController::class) -> middleware('auth');
Route::view('/home','home') -> name('HOME') -> middleware('auth');    

Route::get('difusion/enviarSaludo/{nombre}/{direccion}', [difusionController::class, 'Bienvenida']);

Route::post('articulos/importar', [ArticulosController::class, 'ImportarExcel'])->middleware('auth')->name('importarArticulos');
Route::get('articulos/exportar/', [ArticulosController::class, 'exportExcel'])->name('exportarArticulos');

Route::resource('articulos', ArticulosController::class);

