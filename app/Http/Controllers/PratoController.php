<?php

namespace App\Http\Controllers;

use App\Models\Prato;

class PratoController extends Controller
{
    public function index()
    {
        $pratos = Prato::all();

        return view('pratos.index', ['pratos' => $pratos]);
    }
}