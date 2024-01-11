<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductsController;

Route::get('/view', [ProductsController::class, 'viewProduct'])->name('product.view');
Route::get('/add', [ProductsController::class, 'addProduct'])->name('product.add');

Route::post('/store', [ProductsController::class, 'storeProduct'])->name('product.store');
Route::get('/edit/{id}', [ProductsController::class, 'editProduct'])->name('product.edit');

Route::post('/update/{id}', [ProductsController::class, 'updateProduct'])->name('product.update');

//Product Details
Route::get('/details/{id}', [ProductsController::class, 'product'])->name('product.trees');

//Plot Routes
Route::get('/plot/view', [ProductsController::class, 'viewPlot'])->name('plot.view');
Route::get('/plot/add', [ProductsController::class, 'addPlot'])->name('plot.add');

Route::post('/plot/submit', [ProductsController::class, 'submitPlot'])->name('plot.submit');
Route::get('/plot/edit/{id}', [ProductsController::class, 'editPlot'])->name('plot.edit');

Route::post('/plot/update/{id}', [ProductsController::class, 'updatePlot'])->name('plot.update');

//Product Details
Route::get('/plot/details/{id}', [ProductsController::class, 'plot'])->name('plot.details');