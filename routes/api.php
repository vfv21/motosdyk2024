<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('v1/servicios', App\Http\Controllers\Api\V1\ServicioController::class);

Route::apiResource('v1/citas', App\Http\Controllers\Api\V1\CitaController::class);


