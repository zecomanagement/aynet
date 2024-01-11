<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\VisitSiteController;

Route::get('/view', [VisitSiteController::class, 'viewVisit'])->name('view.visit');
Route::get('/add', [VisitSiteController::class, 'addVisit'])->name('add.visit');

Route::post('/store', [VisitSiteController::class, 'storeVisit'])->name('store.visit');
Route::get('/edit/{id}', [VisitSiteController::class, 'editVisit'])->name('edit.visit');

Route::post('/update/{id}', [VisitSiteController::class, 'updateVisit'])->name('update.visit');