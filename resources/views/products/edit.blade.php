{{-- <h4>Estamos en view edit.blade.php</h4>
{{ dd($product) }} --}}

<h1>Editar un Producto</h1>

<form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
    @csrf
    @method('PUT')
    <div class="form-row">
        <label>Titulo</label>
        <input class="form-control" type="text" name="title" value="{{ $product->title }}" >
    </div>
    <div class="form-row">
        <label>Descripción</label>
        <input class="form-control" type="text" name="description" value="{{ $product->description }}" >
    </div>
    <div class="form-row">
        <label>Precio</label>
        <input class="form-control" type="number" min="1.00" step="0.01" name="price" value="{{ $product->price }}" >
    </div>
    <div class="form-row">
        <label>Stock</label>
        <input class="form-control" type="number" min="0" name="stock" value="{{ $product->stock }}" >
    </div>
    <div class="form-row">
        <label>Status</label>
        <select class="custom-select" name="status" >
            <option {{ $product->status == 'disponible' ? 'selected' : '' }} value="disponible">disponible</option>
            <option {{ $product->status == 'No-disponible' ? 'selected' : '' }} value="No-disponible">No-disponible</option>
        </select>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary btn-lg">Editar Producto</button>
    </div>
</form>