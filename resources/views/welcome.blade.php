{{-- @extends('layouts.master') --}}
@extends('layouts.app')

@section('content')
    {{-- {{ dd($products) }} --}}
    <h1>Bienvenido</h1>
    @empty ($products)
    <div class="alert alert-danger">
        No hay productos!
    </div>
    @else
    <div class="row">
        @foreach ($products as $product)
        <div class="col-3">
            @include('components.product-card')
        </div>
        @endforeach
    </div>
    @endempty
@endsection