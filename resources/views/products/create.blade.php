@extends('layouts.master')
@section('content')
    <h1>Crear un Producto</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="form-row">
            <label>Titulo</label>
            <input class="form-control" type="text" name="title" >
        </div>
        <div class="form-row">
            <label>Descripción</label>
            <input class="form-control" type="text" name="description" >
        </div>
        <div class="form-row">
            <label>Precio</label>
            <input class="form-control" type="number" min="1.00" step="0.01" name="price" >
        </div>
        <div class="form-row">
            <label>Stock</label>
            <input class="form-control" type="number" min="0" name="stock" >
        </div>
        <div class="form-row">
            <label>Status</label>
            <select class="custom-select" name="status" >
                <option value="" selected>Selecionar...</option>
                <option value="disponible">disponible</option>
                <option value="no-disponible">no-disponible</option>
            </select>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg">Crear Prodcuto</button>
        </div>
    </form>
@endsection