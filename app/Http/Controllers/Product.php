<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Prompts\Prompt;

class Product extends Controller
{
    public function index() {
        //$product = Product::all();
        return view('Products.index', compact('product'));
    }
    
    public function view($id) {
        //$product = Product::findOrFail($id);
        return view('Products.view', compact('product'));
    }
    public function create() {
        //$product = Product::all();
        return view('Products.create', compact('product'));
    }
    public function update() {
        return view('Products.update');
    }
    public function terminated() {
        return view('Products.terminated');
    }
    public function delete() {
        return view('Products.delete');
    }
    public function store() {
        return 'formulario';
    }
}
