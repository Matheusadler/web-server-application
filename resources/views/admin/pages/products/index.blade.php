@extends('admin.layouts.app')

@section('title', 'Página Inicial')

@section('content')

<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <h3 class="masthead-brand">Estoque de Produtos</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="/">Início</a>
                <a class="nav-link" href="{{ route('products.index') }}">Estoque</a>
                <a class="nav-link" href="/contato">Contato</a>
            </nav>
        </div>
    </header>

    <main role="main" class="inner cover">
        <h1 class="cover-heading">Estoque MIRANTE</h1>
        <p class="lead">Sistema Web para controle e gerenciamento de estoque de produtos.</p>
        <p class="text-center">
            <img class="imagem" src="https://upload.wikimedia.org/wikipedia/pt/7/7e/TV_Mirante.png" alt="">
        </p>
    </main>

    <footer class="mastfoot mt-auto text-center">
        <strong>Copyright &copy; 2020
            TV Mirante.</strong>
    </footer>
</div>

@endsection