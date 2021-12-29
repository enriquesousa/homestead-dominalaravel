@extends('layouts.app')
@section('content')

<h1>Editar un Producto</h1>
    
<form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
    @csrf
    @method('PUT')
    
    <div class="form-row">
        <label>Titulo</label>
        <input class="form-control" type="text" name="title" value="{{ old('title') ?? $product->title }}" required>
    </div>

    <div class="form-row">
        <label>Descripción</label>
        <input class="form-control" type="text" name="description" value="{{ old('description') ?? $product->description }}" required>
    </div>

    <div class="form-row">
        <label>Precio</label>
        <input class="form-control" type="number" min="1.00" step="0.01" name="price" value="{{ old('price') ?? $product->price }}" required>
    </div>

    <div class="form-row">
        <label>Stock</label>
        <input class="form-control" type="number" min="0" name="stock" value="{{ old('stock') ?? $product->stock }}" required>
    </div>

    <div class="form-row">
        <label>Status</label>
        <select class="custom-select" name="status" >
            <option {{ old('status') == 'disponible' ? 'selected' : ($product->status == 'disponible' ? 'selected' : '') }} value="disponible">disponible</option>
            <option {{ old('status') == 'No-disponible' ? 'selected' : ($product->status == 'No-disponible' ? 'selected' : '') }} value="No-disponible">No-disponible</option>
        </select>
    </div>

    <div class="form-row mt-3">
        <button type="submit" class="btn btn-primary btn-lg">Editar Producto</button>
    </div>

</form>

@endsection