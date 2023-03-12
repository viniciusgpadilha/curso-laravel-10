@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')
    <div class="container">
        <h1>Editar Produto {{ $product->name }}</h1>

        <form class="form" action="{{ route('products.update', $product->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" id="name" value="{{ $product->name }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label" >Preço</label>
                <input type="text" name="price" id="price" value="{{ $product->price }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label" >Descrição</label>
                <input type="text" name="description" id="description" value="{{ $product->description }}" class="form-control">
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