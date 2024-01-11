<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\VFController;
use App\Http\Controllers\Backend\UserController;

//VF Routes
Route::get('/view', [VFController::class, 'viewVF'])->name('vf.view');
Route::get('/add', [VFController::class, 'addVF'])->name('vf.add');

Route::post('/store', [VFController::class, 'storeVF'])->name('vf.store');
Route::get('/edit/{id}', [VFController::class, 'editVF'])->name('vf.edit');

Route::post('/update/{id}', [VFController::class, 'updateVF'])->name('vf.update');
Route::get('/delete/{id}', [VFController::class, 'deleteVF'])->name('vf.delete');
