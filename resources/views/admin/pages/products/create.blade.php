@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')
    <h1>Cadastrar Novo Produto</h1>

    @include('admin.includes.alerts')

    <form class="form" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" name="name" id="name" placeholder="Nome:" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <input type="text" name="price" id="price" placeholder="Preço:" value="{{ old('price') }}">
        </div>
        <div class="form-group">
            <input type="text" name="description" id="description" placeholder="Descrição:" value="{{ old('description') }}">
        </div>
        <div class="form-group">
            <input type="file" name="arquivo" id="arquivo">
        </div>
        <button class="btn btn-success" type="submit">Enviar</button>
    </form>
@endsection