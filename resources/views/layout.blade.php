<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Restaurante</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Tailwind -->
<script src="https://cdn.tailwindcss.com"></script>

<style>

/* Cabeçalho da tabela vermelho */
.thead-red th{
background-color:#c0392b;
color:white;
}

/* Navbar verde musgo */
.navbar-moss{
background-color:#556B2F;
}

/* Link ativo (quando página atual) */
.active-link{
background-color:#c0392b;
color:white !important;
border-radius:6px;
padding:6px 12px;
}

</style>

</head>

<body class="bg-gray-100">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg shadow navbar-moss">
<div class="container">

<a class="navbar-brand fs-3 fw-bold text-white" href="/">
🍽 Restaurante
</a>

<div class="navbar-nav">

<a class="nav-link text-lg fw-semibold text-white 
{{ request()->is('clientes') ? 'active-link' : '' }}" 
href="/clientes">Clientes</a>

<a class="nav-link text-lg fw-semibold text-white 
{{ request()->is('pratos') ? 'active-link' : '' }}" 
href="/pratos">Pratos</a>

<a class="nav-link text-lg fw-semibold text-white 
{{ request()->is('pedidos') ? 'active-link' : '' }}" 
href="/pedidos">Pedidos</a>

</div>

</div>
</nav>

<!-- Conteúdo -->
<div class="container mt-5">

<div class="bg-white p-4 rounded shadow">

@yield('conteudo')

</div>

</div>

</body>
</html>