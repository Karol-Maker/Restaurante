<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
        ]);

        Cliente::create($request->all());

        return redirect('cliente');
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.form', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
        ]);

        Cliente::find($id)->update($request->all());

        return redirect('cliente');
    }

    public function destroy($id)
    {
        Cliente::destroy($id);
        return redirect('cliente');
    }

    public function search(Request $request)
    {
        $clientes = Cliente::where('nome', 'like', '%' . $request->valor . '%')->get();

        return view('clientes.index', compact('clientes'));
    }
}