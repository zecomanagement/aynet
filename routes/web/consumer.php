<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ConController;

//Consumer Routes
Route::get('/view', [ConController::class, 'viewCon'])->name('con.view');
Route::get('/add', [ConController::class, 'addCon'])->name('con.add');

Route::get('/add/user', [ConController::class, 'addOnlineCon'])->name('online.con.add');
Route::post('/store/user', [ConController::class, 'storeOnlineCon'])->name('online.con.store');

Route::post('/store', [ConController::class, 'storeCon'])->name('con.store');
Route::get('/edit/{id}', [ConController::class, 'editCon'])->name('con.edit');

Route::post('/update/{id}', [ConController::class, 'updateCon'])->name('con.update');
Route::post('/delete/{id}', [ConController::class, 'updateCon'])->name('con.delete');
