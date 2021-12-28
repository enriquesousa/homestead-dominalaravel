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

        // antes de agregar el producto a la base de datos checamos condición de error si
        // status este disponible y stock es = 0, nos dispare un mensaje de error
        if (request()->status == 'disponible' && request()->stock == 0) {
            session()->flash('error', 'Si esta disponible tiene que tener un stock');
            return redirect()->back();
        }

        $product = Product::create(request()->all());
        return redirect()->route('products.index');
    }

    public function show($product){
        $product = Product::findOrFail($product);
        return view('products.show')->with([
            'product' => $product,
            'html' => "<h2>Subtitulo</h2>",
        ]);
    }

    public function edit($product){
        // return "Mostrando la forma para editar producto con id {$product} desde Controlador edit($product)";
        // dd($product);
        return view('products.edit')->with([
            'product' => Product::findOrFail($product),
         ]);
    }

    public function update($product){
        // dd($product);
        // dd("Estamos en update() {$product}");
        $product = Product::findOrFail($product);
        $product->update(request()->all());
        return redirect()->route('products.index');
    }

    public function destroy($product){
        $product = Product::findOrFail($product);
        $product->delete();
        return redirect()->route('products.index');
    }
}
