<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CountyController;
use App\Http\Controllers\Frontend\SellTreesController;

Route::get('/view', [SellTreesController::class, 'viewSales'])->name('view.sales');
Route::get('/add', [SellTreesController::class, 'addSales'])->name('add.sales');

Route::post('/store', [SellTreesController::class, 'storeSales'])->name('store.sales');

Route::get('getSubCounty/{id}', [CountyController::class, 'getSubCounty'])->name('get.subcounty');
Route::get('getWard/{id}', [SellTreesController::class, 'getWard'])->name('get.ward');