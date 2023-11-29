<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

// TODO CREATE A DEFUALT IMG $table->text('body')->default('NO BODY'); en la migracion
class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
    public function view($id) {
        $categories = Category::findOrFail($id);
        return view('categories.view', compact('categories'));
    }
    public function create() {
        return view('categories.create');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',

        ],[
            'name.required' => 'The name is required'
        ]);
        $category = Category::create([
            'name' => $validated['name'],
        ]);
        if($category){
             return redirect(route('categories.index'));
        }
        return redirect(route('categories.create')); 
    }
}
