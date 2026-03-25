<?php

namespace App\Http\Controllers;

use App\Models\Pedido;

class PedidoController extends Controller
{
    public function index()
    {
        $pedido = Pedido::all();

        return view('pedido.index', ['pedido' => $pedido]);
    }
}