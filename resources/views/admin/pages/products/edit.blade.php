@extends('admin.layouts.app')

@section('title', 'Editar Produtos')

@section('content')
<div class="container">
    <header class="masthead mb-auto">
        <div class="inner">
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link" href="/">Início</a>
                <a class="nav-link active" href="{{ route('products.index') }}">Estoque</a>
                <a class="nav-link" href="/contato">Contato</a>
            </nav>
        </div>
    </header>
    <h3><strong>Editar Produto</strong></h3>
    <hr>
    <form action="{{ route('products.update', $products->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title titulo">
                            <i class="nav-icon fas fa-info-circle"></i>
                            Informações do Produto
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="titulo">Nome</label>
                            <input class="form-control" type="text" name="nome" placeholder="Nome"
                                value="{{ $products->nome }}">
                        </div>
                        <div class="form-group">
                            <label class="titulo">Código</label>
                            <input class="form-control" type="text" name="codigo" placeholder="Código"
                                value="{{ $products->codigo }}">
                        </div>
                        <div class="form-group">
                            <label class="titulo">Descrição</label>
                            <textarea class="form-control" name="descricao"
                                value="{{ $products->descricao }}"></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary swalDefaultSuccess">Salvar Produto</button>
            <a href="{{ route('products.index') }}" type="button" class="btn btn-primary">Cancelar</a>
        </div>
    </form>
    <footer class="mastfoot mt-auto text-center">
        <strong>Copyright &copy; 2020
            TV Mirante.</strong>
    </footer>
</div>

@endsection