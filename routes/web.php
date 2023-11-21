<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\ProductController;
use App\Providers\RouteServiceProvider;
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



Route::prefix('products')->group( function() {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/view{id}', [ProductController::class, 'view'])->name('products.view');
    Route::get('/update{id}', [ProductController::class, 'update'])->name('products.update');
    Route::get('/delete{id}', [ProductController::class, 'delete'])->name('products.delete');
    Route::get('/terminate{id}', [ProductController::class, 'terminate'])->name('products.terminate');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/create', [ProductController::class, 'store'])->name('products.store');
});
Route::prefix('categories')->group( function() {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/view{id}', [CategoryController::class, 'view'])->name('categories.view');
    Route::get('/update{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('/delete{id}', [CategoryController::class, 'delete'])->name('categories.delete');
    Route::get('/terminate{id}', [CategoryController::class, 'terminate'])->name('categories.terminate');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/create', [CategoryController::class, 'store'])->name('categories.store');
});
Route::prefix('establishments')->group( function() {
    Route::get('/', [EstablishmentController::class, 'index'])->name('establishments.index');
    Route::get('/view{id}', [EstablishmentController::class, 'view'])->name('establishments.view');
    Route::get('/update{id}', [EstablishmentController::class, 'update'])->name('establishments.update');
    Route::get('/delete{id}', [EstablishmentController::class, 'delete'])->name('establishments.delete');
    Route::get('/terminate{id}', [EstablishmentController::class, 'terminate'])->name('establishments.terminate');
    Route::get('/create', [EstablishmentController::class, 'create'])->name('establishments.create');
    Route::post('/create', [EstablishmentController::class, 'store'])->name('establishments.store');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
