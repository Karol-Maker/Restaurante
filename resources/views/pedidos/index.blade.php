@extends('layout')

@section('conteudo')

<h2 class="mb-4">Novo Pedido</h2>

<form action="/pedidos" method="POST">

@csrf

<div class="mb-3">
<label>Nome</label>
<input type="text" name="nome" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="mb-3">
<label>Telefone</label>
<input type="text" name="telefone" class="form-control">
</div>

<button class="btn btn-success">
Adicionar Pedido
</button>

</form>

@endsection