<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\pratosController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('home');
});

Route::get('/pratos', [pratosController::class, 'index']);


Route::get('/clientes', [ClienteController::class, 'index']);


Route::get('/pedidos', [PedidoController::class, 'index']);