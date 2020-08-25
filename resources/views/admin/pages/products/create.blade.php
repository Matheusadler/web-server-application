@extends('admin.layouts.app')

@section('content')

<div class="container">
    <h3><strong>Adicionar Produto</strong></h3>
    <hr>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" role="">
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
                            <input class="form-control" type="text" name="nome" value="{{ old('nome') }}">
                        </div>
                        <div class="form-group">
                            <label class="titulo">Código</label>
                            <input class="form-control" type="text" name="codigo" value="{{ old('codigo') }}">
                        </div>
                        <div class="form-group">
                            <label class="titulo">Descrição</label>
                            <textarea class="form-control" name="descricao" value="{{ old('descricao') }}"></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary swalDefaultSuccess">Adicionar Produto</button>
            <a href="{{ route('products.index') }}" type="button" class="btn btn-primary">Cancelar</a>
        </div>
    </form>
    <footer class="mastfoot mt-auto text-center">
        <strong>Copyright &copy; 2020
            TV Mirante.</strong>
    </footer>
</div>


@endsection