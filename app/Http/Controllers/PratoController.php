<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pratos;


class pratosController extends Controller
{

    function index()
    {
        $dados = pratos::all(); //select * from pratos

        // dd($dados);
        //var_dump($dados);
        //  exit;

        return view('pratos.list', ['dados' => $dados]);
    }

    function create()
    {
        $categorias = Categoriapratos::orderBy('nome')->get();

        return view('pratos.form', ['categorias' => $categorias]);
    }
    function validateRequest(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'categoria_id' => 'required',
            'imagem' => 'nullable|image|mimes:png,jpg,jpeg'
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'cpf.required' => "O :attribute é obrigatório",
            'categoria_id.required' => "O :attribute é obrigatório",
            'imagem.image' => "O :attribute é deve ser enviado",
            'imagem.mimes' => "O :attribute é deve ser das extensões:PNG, JPEG e JPG",
        ]);
    }

    function store(Request $request)
    {
        $this->validateRequest($request);
        $data = $request->all();
        $imagem = $request->file('imagem');

        if ($imagem) {
            $nome_imagem = date('YmdiHs') . "." . $imagem->getClientOriginalExtension();
            $diretorio = "imagem/pratos/";
            $imagem->storeAs($diretorio, $nome_imagem, 'public');

            $data['imagem'] = $diretorio . $nome_imagem;
        }

        pratos::create($data);

        return redirect('pratos');
    }

    function edit($id)
    {
        $dado = pratos::find($id);
        $categorias = Categoriapratos::orderBy('nome')->get();


        return view('pratos.form', [
            'dado' => $dado,
            'categorias' => $categorias
        ]);
    }

    function update(Request $request, $id)
    {
        $this->validateRequest($request);
        $data = $request->all();
        $imagem = $request->file('imagem');

        if ($imagem) {
            $nome_imagem = date('YmdiHs') . "." . $imagem->getClientOriginalExtension();
            $diretorio = "imagem/pratos/";
            $imagem->storeAs($diretorio, $nome_imagem, 'public');

            $data['imagem'] = $diretorio . $nome_imagem;
        }

        pratos::find($id)->update($data);

        return redirect('pratos');
    }

    function destroy($id)
    {
        pratos::destroy($id);
        return redirect('pratos');
    }

    function search(Request $request)
    {
        if (!empty($request->valor)) {
            $dados = pratos::where(
                $request->tipo,
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $dados = pratos::all();
        }

        return view('pratos.list', ['dados' => $dados]);
    }
}