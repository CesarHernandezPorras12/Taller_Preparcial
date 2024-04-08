<?php

use App\Http\Controllers\VentaMotosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('venta-motos', VentaMotosController::class);

