<?php

namespace App\Http\Controllers;

use App\Models\Pedido;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();

        return view('pedidos.index', ['pedidos' => $pedidos]);
    }
}