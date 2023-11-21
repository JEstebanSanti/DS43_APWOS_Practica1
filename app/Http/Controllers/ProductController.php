<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    
    public function view($id) {
        $products = Product::findOrFail($id);
        return view('products.view', compact('products'));
    }
    public function create() {
        $products = Product::all();
        return view('products.create', compact('products'));
    }
    public function update() {
        return view('products.update');
    }
    public function terminated() {
        return view('products.terminated');
    }
    public function delete() {
        return view('products.delete');
    }
    public function store() {
        return 'formulario';
    }
}
