@extends('layouts.app')
@section('content')

    <h1>Crear un Producto</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="form-row">
            <label>Titulo</label>
            <input class="form-control" type="text" name="title" value="{{ old('title') }}" required>
        </div>

        <div class="form-row">
            <label>Descripción</label>
            <input class="form-control" type="text" name="description" value="{{ old('description') }}" required>
        </div>

        <div class="form-row">
            <label>Precio</label>
            <input class="form-control" type="number" min="1.00" step="0.01" name="price" value="{{ old('price') }}" required>
        </div>

        <div class="form-row">
            <label>Stock</label>
            <input class="form-control" type="number" min="0" name="stock" value="{{ old('stock') }}" required>
        </div>

        <div class="form-row">
            <label>Status</label>
            <select class="custom-select" name="status">
                <option value="" selected>Selecionar...</option>
                <option {{ old('status') == 'disponible' ? 'selected' : '' }} value="disponible">disponible</option>
                <option {{ old('status') == 'No-disponible' ? 'selected' : '' }} value="No-disponible">No-disponible</option>
            </select>
        </div>

        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg">Crear Producto</button>
        </div>
    </form>
@endsection