<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\Backend\MemberProfileController;

//Member Routes
Route::get('/view', [MemberController::class, 'viewMb'])->name('mb.view');
Route::get('/add', [MemberController::class, 'addMb'])->name('mb.add');

Route::get('/add/user', [MemberController::class, 'addCl'])->name('cl.add');
Route::post('/store/user', [MemberController::class, 'storeCl'])->name('cl.store');

Route::post('/store', [MemberController::class, 'storeMb'])->name('mb.store');
Route::get('/edit/{id}', [MemberController::class, 'editMb'])->name('mb.edit');

Route::post('/update/{id}', [MemberController::class, 'updateMb'])->name('mb.update');
Route::post('/delete/{id}', [MemberController::class, 'deleteMb'])->name('mb.delete');

//Member Profile Routes
Route::get('pro/view', [MemberProfileController::class, 'viewMbPro'])->name('prof.view');
Route::get('pro/edit', [MemberProfileController::class, 'editMbPro'])->name('prof.edit');

Route::post('pro/store', [MemberProfileController::class, 'storeMbPro'])->name('prof.store');

//Password Routes
Route::get('/pass/view', [MemberProfileController::class, 'viewPass'])->name('pass.view');
Route::post('/pass/update', [MemberProfileController::class, 'updatePass'])->name('pass.update');
