@extends('admin.layouts.app')

@section('title', 'Entre em Contato')

@section('content')

<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <h3 class="masthead-brand">Estoque de Produtos</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link" href="/">Início</a>
                <a class="nav-link" href="{{ route('products.index') }}">Estoque</a>
                <a class="nav-link active" href="/contato">Contato</a>
            </nav>
        </div>
    </header>

    <main role="main" class="inner cover">
        <h1 class="cover-heading">Entre em contato.</h1>
        <p class="lead">Equipe de Desenvolvimento WEB Mirante. Disque o ramal para tirar dúvidas.<br> Ramal: 5049</p>
    </main>

    <footer class="mastfoot mt-auto text-center">
        <strong>Copyright &copy; 2020
            TV Mirante.</strong>
    </footer>
</div>

@endsection