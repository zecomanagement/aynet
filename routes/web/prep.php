<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PrepareLandController;

Route::get('/view', [PrepareLandController::class, 'viewPrep'])->name('view.prep');
Route::get('/add', [PrepareLandController::class, 'addPrep'])->name('add.prep');

Route::post('/store', [PrepareLandController::class, 'storePrep'])->name('store.prep');
Route::get('/edit/{id}', [PrepareLandController::class, 'editPrep'])->name('edit.prep');

Route::post('/update/{id}', [PrepareLandController::class, 'updatePrep'])->name('update.prep');