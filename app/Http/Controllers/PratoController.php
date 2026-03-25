<?php

namespace App\Http\Controllers;

use App\Models\Prato;

class PratoController extends Controller
{
    public function index()
    {
        $prato = Prato::all();

        return view('prato.index', ['prato' => $prato]);
    }
}