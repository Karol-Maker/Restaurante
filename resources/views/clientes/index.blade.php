@extends('layout')

@section('conteudo')

<h2 class="mb-4 text-2xl font-bold text-gray-700">
    👤 Clientes
</h2>

<a href="{{ route('clientes.create') }}" class="btn btn-success mb-3">
    ➕ Novo Cliente
</a>

<table class="table table-hover table-striped">

    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>

        @foreach($clientes as $cliente)

        <tr>
            <td>{{ $cliente->id }}</td>
            <td class="fw-semibold">{{ $cliente->nome }}</td>
            <td>{{ $cliente->telefone }}</td>
            <td>{{ $cliente->email }}</td>

            <td class="d-flex gap-1">

                <!-- VER -->
                <a href="{{ route('clientes.show', $cliente->id) }}"
                   class="btn btn-info btn-sm">
                   👁
                </a>

                <!-- EDITAR -->
                <a href="{{ route('clientes.edit', $cliente->id) }}"
                   class="btn btn-warning btn-sm">
                   ✏
                </a>

                <!-- EXCLUIR -->
                <form action="{{ route('clientes.destroy', $cliente->id) }}"
                      method="POST"
                      style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Tem certeza que deseja excluir?')">
                        🗑
                    </button>
                </form>

            </td>
        </tr>

        @endforeach

    </tbody>

</table>

@endsection