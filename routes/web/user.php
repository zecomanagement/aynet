<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;

//User Routes
Route::get('/view', [UserController::class, 'viewUser'])->name('user.view');
Route::get('/add', [UserController::class, 'addUser'])->name('user.add');

Route::post('/store', [UserController::class, 'storeUser'])->name('user.store');
Route::get('/edit/{id}', [UserController::class, 'editUser'])->name('user.edit');

Route::post('/update/{id}', [UserController::class, 'updateUser'])->name('user.update');
Route::get('/delete/{id}', [UserController::class, 'deleteUser'])->name('user.delete');
