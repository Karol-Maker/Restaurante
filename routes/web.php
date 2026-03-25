<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PratoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('home');
});

Route::get('/prato', [PratoController::class, 'index']);


Route::get('/pedido', [PedidoController::class, 'index']);


Route::resource('clientes', ClienteController::class);