<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Backend\OGOrderController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\SeedlingController;
use App\Http\Controllers\Backend\ServOrderController;
use App\Http\Controllers\Backend\ProjectOrderController;
use App\Http\Controllers\Backend\ProjectSectionController;

//Seedling Order Routes
Route::get('sd/view', [OGOrderController::class, 'viewOrd'])->name('sd.ord.view');
Route::get('sd/add', [OGOrderController::class, 'addOrd'])->name('sd.ord.add');

Route::post('sd/store', [OGOrderController::class, 'storeOrd'])->name('sd.ord.store');
Route::get('sd/edit/{id}', [OGOrderController::class, 'editOrd'])->name('sd.ord.edit');

Route::post('sd/update/{id}', [OGOrderController::class, 'updateOrd'])->name('sd.ord.update');
Route::get('sd/delete/{id}', [OGOrderController::class, 'delOrd'])->name('sd.ord.delete');

//Seedling Order Profile Routes
Route::get('sd/prof/{id}', [OGOrderController::class, 'viewSdProf'])->name('sd.prof.view');

//Seedling Order Checkout Routes
Route::get('sd/checkout/{id}', [OGOrderController::class, 'checkout'])->name('sd.ord.checkout');

//Seedling Order Post Route
Route::post('sd/postOrder/{seed_id}/{seed_qty}', [OGOrderController::class, 'seedOrder'])->name('seed.order');

//Seedling Order Post Route
Route::get('sd/postOrder/{seed_id}/{seed_qty}', [OGOrderController::class, 'seedOrder'])->name('seed.order');

//Project Order Routes
Route::get('pr/view', [ProjectOrderController::class, 'viewPOrd'])->name('pro.ord.view');
Route::get('pr/add', [ProjectOrderController::class, 'addPOrd'])->name('pro.ord.add');

Route::post('pr/store', [ProjectOrderController::class, 'storePOrd'])->name('pro.ord.store');
Route::get('pr/edit/{id}', [ProjectOrderController::class, 'editPOrd'])->name('pro.ord.edit');

Route::post('pr/update/{id}', [ProjectOrderController::class, 'updatePOrd'])->name('pro.ord.update');
Route::get('pr/delete/{id}', [ProjectOrderController::class, 'delPOrd'])->name('pro.ord.delete');

//Get Section
Route::get('getSect/{id}', [ProjectController::class, 'getSection'])->name('pro.sect');

//Get Sub-Section
Route::get('getSubSect/{id}', [ProjectSectionController::class, 'getSubSect'])->name('pro.subsect');

//Project Order Profile Routes
Route::get('pro/prof/{id}', [ProjectOrderController::class, 'viewProf'])->name('pro.prof.view');

//Service Order Routes
Route::get('sv/view', [ServOrderController::class, 'viewSOrd'])->name('srv.ord.view');
Route::get('sv/add', [ServOrderController::class, 'addSOrd'])->name('srv.ord.add');

Route::post('sv/add', [ServOrderController::class, 'storeSOrd'])->name('srv.ord.store');
Route::get('sv/edit/{id}', [ServOrderController::class, 'editSOrd'])->name('srv.ord.edit');

Route::post('sv/update/{id}', [ServOrderController::class, 'updateSOrd'])->name('srv.ord.update');
Route::get('sv/delete/{id}', [ServOrderController::class, 'delSOrd'])->name('srv.ord.delete');

//Service Order Profile Routes
Route::get('sv/prof/{id}', [ServOrderController::class, 'viewSvProf'])->name('srv.prof.view');

//CheckOut Route
Route::get('/checkout', [CartController::class, 'checkOut'])->name('cart.checkout');

Route::get('/project/checkout', [CartController::class, 'projectCheckOut'])->name('cart.project.checkout');
