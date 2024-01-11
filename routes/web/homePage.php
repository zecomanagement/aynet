<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomePagesController;

Route::get('home', [HomePagesController::class, 'home'])->name('home.view');
Route::get('outgrower', [HomePagesController::class, 'outgrower'])->name('outgrower.view');
Route::get('virtual', [HomePagesController::class, 'virtual'])->name('virtual.view');
Route::get('consumer', [HomePagesController::class, 'consumer'])->name('consumer.view');
Route::get('test', [HomePagesController::class, 'test'])->name('test.view');