<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ExtensionsController;

Route::get('/view', [ExtensionsController::class, 'viewExt'])->name('view.ext');
Route::get('/add', [ExtensionsController::class, 'addExt'])->name('add.ext');

Route::post('/store', [ExtensionsController::class, 'storeExt'])->name('store.ext');
Route::get('/edit/{id}', [ExtensionsController::class, 'editExt'])->name('edit.ext');

Route::post('/update/{id}', [ExtensionsController::class, 'updateExt'])->name('update.ext');