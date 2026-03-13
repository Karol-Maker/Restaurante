@extends('layout')

@section('conteudo')

<h2 class="mb-4 text-2xl font-bold text-gray-700">
🍝 Pratos
</h2>

<table class="table table-hover table-striped">

<thead class="table-dark">
<tr>
<th>ID</th>
<th>Nome</th>
<th>Preço</th>
</tr>
</thead>

<tbody>

@foreach($pratos as $prato)

<tr>
<td>{{ $prato->id }}</td>
<td class="fw-semibold">{{ $prato->nome }}</td>
<td class="text-success fw-bold">
R$ {{ $prato->preco }}
</td>
</tr>

@endforeach

</tbody>

</table>

@endsection