<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MensajesController;


Route::get('/',[WelcomeController::class,'index'])->name('welcome');

Route::resource('mensajes',MensajesController::class);