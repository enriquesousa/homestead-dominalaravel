<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
        $products = Product::all();
        return $products;
        dd($products);
        return view('products.index');
    }

    public function create(){
        return 'Esta es la forma para crear un producto desde el Controlador create()';
    }

    public function store(){
        //
    }

    public function show($product){
        $product = Product::findOrFail($product);
        return $product;
        dd($product);
        return view('products.show');
    }

    public function edit($product){
        return "Mostrando la forma para editar producto con id {$product} desde Controlador edit($product)";
    }

    public function update($product){
        //
    }

    public function destroy($product){
        //
    }
}
