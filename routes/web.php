<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();



Route::prefix('/Products')->group(funtion(){
    Route::get('/', [ProductController::class, 'index'])->name('productos.list');
    Route::get('/view{id}', [ProductController::class, 'view'])->name('productos.view');
    Route::get('/update{id}', [ProductController::class, 'update'])->name('productos.update');
    Route::get('/delete{id}', [ProductController::class;, 'delete'])->name('productos.delete');
    Route::get('/terminate{id}', [ProductController::class, 'terminate'])->name('productos.terminate');
    Route::get('/create', [ProductController::class, 'create'])->name('productos.create');
    Route::post('/create', [ProductController::class, 'store'])->name('product.store')
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
