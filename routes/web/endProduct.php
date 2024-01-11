<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Backend\ProductsController;
use App\Http\Controllers\Frontend\EndProductsController;

Route::get('/view', [EndProductsController::class, 'viewEP'])->name('view.ep');
Route::get('/add', [EndProductsController::class, 'addEP'])->name('add.ep');

Route::post('/store', [EndProductsController::class, 'storeEP'])->name('store.ep');

//End Products Detail
Route::get('ep/detail/{id}', [EndProductsController::class, 'endProduct'])->name('ep.details');
Route::get('/details/{id}', [ProductsController::class, 'product'])->name('product.trees');

//Store to Cart
Route::post('/ep/store', [CartController::class, 'storeEProduct'])->name('eproduct.store');

