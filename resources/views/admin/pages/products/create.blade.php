@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')

<div class="container">
    <h1>Cadastrar Novo Produto</h1>

    @include('admin.includes.alerts')
    <form class="form" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label" value="{{ old('name') }}">Nome</label>
            <input type="email" name="name" id="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label" value="{{ old('price') }}">Preço</label>
            <input type="email" name="price" id="price" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label" value="{{ old('description') }}">Descrição</label>
            <input type="email" name="description" id="description" class="form-control">
        </div>
        <div class="mb-3">
            <label for="arquivo" class="form-label">Arquivo</label>
            <input type="file" name="arquivo" id="arquivo" class="form-control">
        </div>
        <div style="display:flex" class="row">
            <div style="display:flex" class="col justify-content-start">
                <a class="btn btn-secondary " href="{{ route('products.index') }}">Voltar</a>  
            </div>
            <div style="display:flex" class="col justify-content-end">
                <button class="btn btn-success" type="submit">Enviar</button>
            </div>
        </div>
    </form>
</div>
@endsection