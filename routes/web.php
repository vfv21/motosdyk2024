<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::view('/', 'welcome');

Route::resource('servicios', App\Http\Controllers\ServicioController::class);

Route::resource('citas', App\Http\Controllers\CitaController::class);

