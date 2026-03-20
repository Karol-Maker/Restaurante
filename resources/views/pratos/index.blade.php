@extends('layout')

@section('conteudo')

<h2 class="mb-4 text-2xl font-bold text-gray-700">
🍝 pratos
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

@foreach($pratos as $pratos)

<tr>
<td>{{ $pratos->id }}</td>
<td class="fw-semibold">{{ $pratos->nome }}</td>
<td class="text-success fw-bold">
R$ {{ $pratos->preco }}
</td>
</tr>

@endforeach

</tbody>

</table>

@endsection