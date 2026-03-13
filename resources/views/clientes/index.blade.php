@extends('layout')

@section('conteudo')

<h2 class="mb-4 text-2xl font-bold text-gray-700">
👤 Clientes
</h2>

<table class="table table-hover table-striped">

<thead class="table-dark">
<tr>
<th>ID</th>
<th>Nome</th>
<th>Telefone</th>
<th>Email</th>
</tr>
</thead>

<tbody>

@foreach($clientes as $cliente)

<tr>
<td>{{ $cliente->id }}</td>
<td class="fw-semibold">{{ $cliente->nome }}</td>
<td>{{ $cliente->telefone }}</td>
<td>{{ $cliente->email }}</td>
</tr>

@endforeach

</tbody>

</table>

@endsection