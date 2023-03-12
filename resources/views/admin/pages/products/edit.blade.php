@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')
    <div class="container">
        <h1>Editar Produto {{ $product->name }}</h1>

        <form class="form" action="{{ route('products.update', $product->id) }}" method="post"  enctype="multipart/form-data">
            @csrf

            @method('PUT')

            @include('admin.pages.products._partials.form')
        </form>
    </div>
@endsection
