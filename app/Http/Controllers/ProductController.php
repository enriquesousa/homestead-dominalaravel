<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index(){
        return 'Esta es la lista de productos desde el Controlador ProductController index()';
    }

    public function create(){
        return 'Esta es la forma para crear un producto desde el Controlador create()';
    }

    public function store(){
        //
    }

    public function show($product){
        return "Mostrando producto con id {$product} desde Controlador show($product)";
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
