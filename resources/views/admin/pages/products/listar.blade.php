@extends('admin.layouts.app')

@section('title', 'Lista de Produtos')

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
    <h3><strong>Estoque de Produtos</strong></h3>
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="card card-dark">
                <div class="card-header titulo">
                    <h5>
                        <i class="nav-icon fas fa-list-ul"></i>
                        Lista de Produtos Cadastrados
                    </h5>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Nome do Produto</th>
                                <th class="text-center">Código</th>
                                <th class="text-center">Descrição</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td class="text-left">{{ $product->nome }}</td>
                                <td class="text-center">{{ $product->codigo }}</td>
                                <td class="text-center">{{ $product->descricao }}</td>
                                <td class="text-center">
                                    <table>

                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary"><i
                                                class="nav-icon fas fa-edit"></i></a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="nav-icon fas fa-trash"></i></button>
                                        </form>
                                    </table>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

    </div>
    <div class="card-footer text-center">
        <a href="{{ route('products.create') }}" class="btn btn-primary swalDefaultSuccess">Adicionar Produto</a>
        <a href="/" class="btn btn-primary swalDefaultSuccess">Voltar</a>
    </div>
    <footer class="mastfoot mt-auto text-center">
        <strong>Copyright &copy; 2020
            TV Mirante.</strong>
    </footer>
</div>

@endsection