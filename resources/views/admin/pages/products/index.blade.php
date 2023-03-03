@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')

    <h1>Exibindo os produtos</h1>

    <a href="{{ route('products.create') }}">Cadastrar</a>

    <table class="table-auto">
        <thead>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->name}}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <a href="">Detalhes</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $products->links() !!}

    {{-- @component('admin.components.card')
        @slot('title')
            <h1>título do card</h1>
        @endslot
        <p>card de exemplo</p>
    @endcomponent
        

    @include('admin.includes.alerts', ['content' => 'Alerta de preços de produtos'])

    <hr>

    @if (isset($products))
        @foreach ($products as $product)
            <p class="@if($loop->last) last @endif">{{ $product }}</p>
        @endforeach
    @endif
    
    <hr>
    
    @forelse ($products as $product)
        <h1 class="@if($loop->first) last @endif">{{ $product }}</h1>
    @empty
        <p>Não existem produtos cadastrados</p>    
    @endforelse --}}
    
    {{-- @if ($teste === '123')
        <p>É igual</p>
    @elseif ($teste == 123)
        <p>É igual a 123</p>
    @else
        <p>É diferente</p>
    @endif
    
    @unless($teste === '123')
        <p>A menos que</p> 
    @else
        <p>É igual</p>
    @endunless

    @isset($teste2)
        {{ $teste2 }}
    @endisset

    @empty($teste3)
        <p>Teste 3 vazio</p>
    @else
        <p>Teste 3 cheio</p>
    @endempty

    @auth
        <p>Autenticado</p>
    @else
        <p>Não autenticado</p>
    @endauth

    @guest
        <p>Convidado</p>
    @endguest --}}
@endsection

{{-- @push('styles')
    <style>
        .last, .first {
            background: #CCC;
        }
    </style>
@endpush --}}

{{-- @push('scripts')
    <script>
        document.body.style.background = '#999';
    </script>
@endpush --}}
