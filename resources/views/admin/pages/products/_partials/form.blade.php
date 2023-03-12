@csrf
<div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" name="name" id="name" value="{{ $product->name ?? old('name') }}" class="form-control">
</div>
<div class="mb-3">
    <label for="price" class="form-label">Preço</label>
    <input type="text" name="price" id="price" value="{{ $product->price ?? old('price') }}" class="form-control">
</div>
<div class="mb-3">
    <label for="description" class="form-label">Descrição</label>
    <input type="text" name="description" id="description" value="{{ $product->description ?? old('description') }}" class="form-control">
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
