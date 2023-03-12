@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')

<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3 ">
                {{-- {{ $products->total() }} --}}
                <h5 class="card-title">Lista de Produtos <span class="text-muted fw-normal">()</span></h5>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <div>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Grid" aria-label="Grid"><i class="bx bx-grid-alt"></i></a>
                        </li>
                    </ul>
                </div>
                <div style="display:flex" class="row">
                    <div class="col">
                        <form class="form" action="{{ route('products.search') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Filtrar" aria-label="Filtrar" name="filter" id="filter" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="submit">Pesquisar</button>
                              </div>
                        </form>
                    </div>
                    <div class="col">
                        <a href="{{ route('products.create') }}" class="col btn btn-secondary"><i class="bx bx-plus me-1"></i>Adicionar Produto</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="">
                <div class="table-responsive">
                    <table class="table project-list-table table-nowrap align-middle table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Preço</th>
                                <th scope="col" style="width: 200px;">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>
                                    @if ($product->arquivo)
                                        <img src="{{ asset("storage/$product->arquivo") }}" alt="{{ $product->arquivo }}" class="avatar-sm rounded-circle me-2" />
                                    @else
                                        <img src="{{ asset("storage/products/nope.jpg") }}" alt="" class="avatar-sm rounded-circle me-2" />
                                    @endif
                                    <a href="{{ route('products.show', ['product' => $product]) }}" class="text-body">{{ $product->name }}</a>
                                </td>
                                <td>{{ $product->description}}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a class="btn btn-primary" href="{{ route('products.show', ['product' => $product]) }}" role="button"><i class="fa-solid fa-magnifying-glass"></i> Detalhar</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="btn btn-primary" href="{{ route('products.edit', ['product' => $product]) }}" role="button"><i class="fa-solid fa-file-pen"></i> Editar</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {!! $products->links() !!}
</div>



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
