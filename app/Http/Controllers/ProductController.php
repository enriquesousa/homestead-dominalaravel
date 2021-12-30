<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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

    public function store(ProductRequest $request){
        $product = Product::create($request->validated());
        return redirect()->route('products.index')->withSuccess("El producto con id  {$product->id} fue creado");
    }

    public function show(Product $product){
        // $product = Product::findOrFail($product); // ya no es necesaria con la inyeccion implicita Product
        return view('products.show')->with([
            'product' => $product,
            'html' => "<h2>Subtitulo</h2>",
        ]);
    }

    public function edit(Product $product){
        // return "Mostrando la forma para editar producto con id {$product} desde Controlador edit($product)";
        // dd($product);
        return view('products.edit')->with([
            'product' => $product,
         ]);
    }

    public function update(ProductRequest $request, Product $product){
        $product->update($request->validated());
        return redirect()->route('products.index')->withSuccess("El producto con id  {$product->id} fue editado");
    }

    public function destroy(Product $product){
        // $product = Product::findOrFail($product);
        $product->delete();
        return redirect()->route('products.index')->withSuccess("El producto con id  {$product->id} fue eliminado");
    }
}
