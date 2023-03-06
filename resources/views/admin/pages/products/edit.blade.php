@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')
    <h1>Editar Produto {{ $product->name }}</h1>

    <form action="{{ route('products.update', $product->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" id="name" placeholder="Nome: " value={{ $product->name }}>
        <input type="text" name="price" id="price" placeholder="Preço: " value={{ $product->price }}>
        <input type="text" name="description" id="description" placeholder="Descrição: " value={{ $product->description }}>
        <button type="submit">Enviar</button>
    </form>
@endsection