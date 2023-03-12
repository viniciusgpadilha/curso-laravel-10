@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')

<div class="container">
    <h1>Cadastrar Novo Produto</h1>

    @include('admin.includes.alerts')

    <form class="form" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @include('admin.pages.products._partials.form')
    </form>
</div>
@endsection
