<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserProfileController;


Route::get('/view', [UserProfileController::class, 'viewProfile'])->name('profile.view');
Route::get('/edit', [UserProfileController::class, 'editProfile'])->name('profile.edit');

Route::post('/store', [UserProfileController::class, 'storeProfile'])->name('profile.store');
Route::get('/password/view', [UserProfileController::class, 'viewPassword'])->name('password.view');
Route::post('/password/update', [UserProfileController::class, 'updatePassword'])->name('password.update');
