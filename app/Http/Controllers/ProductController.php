<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
        return view('products.index')->with([
            'products' => Product::all(),
            // 'products' => [], // para enviar lista vacia
         ]);
    }

    public function create(){
        // return 'Esta es la forma para crear un producto desde el Controlador create()';
        return view('products.create');
    }

    public function store(){
        // dd('Estamos en metodo store()');
        // $product = Product::create([
        //     'title' => request()->title,
        //     'description' => request()->description,
        //     'price' => request()->price,
        //     'stock' => request()->stock,
        //     'status' => request()->status,
        // ]);

        // Una mejor for de hacerlo
        $product = Product::create(request()->all());
        return $product;
    }

    public function show($product){
        $product = Product::findOrFail($product);
        return view('products.show')->with([
            'product' => $product,
            'html' => "<h2>Subtitulo</h2>",
        ]);
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
