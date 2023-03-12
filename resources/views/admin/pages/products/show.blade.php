@extends('admin.layouts.app')

@section('title', 'Detalhes do Produto {$product->name}')

@section('content')
    <div class="container">
        <h1>Produto {{ $product->name }}</h1>

        <ul>
            <li><strong>Nome: </strong>{{ $product->name }}</li>
            <li><strong>Preço: </strong>{{ $product->price }}</li>
            <li><strong>Descrição: </strong>{{ $product->description }}</li>
        </ul>
        <div style="display:flex" class="row">
            <div style="display:flex" class="col justify-content-start">
                <a class="btn btn-secondary " href="{{ route('products.index') }}">Voltar</a>  
            </div>
            <div style="display:flex" class="col justify-content-end">
                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Deletar {{ $product->name }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection