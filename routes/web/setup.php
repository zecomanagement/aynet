<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\NSController;
use App\Http\Controllers\Backend\NurseryController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Backend\SeedlingController;
use App\Http\Controllers\Backend\ServNameController;
use App\Http\Controllers\Backend\ProsubSectController;
use App\Http\Controllers\Backend\CompDetailsController;
use App\Http\Controllers\Backend\ProjectSectionController;

//Company Details
Route::get('/view', [CompDetailsController::class, 'viewDetails'])->name('details.view');
Route::get('/add', [CompDetailsController::class, 'addDetails'])->name('details.add');

Route::post('/store', [CompDetailsController::class, 'storeDetails'])->name('details.store');
Route::get('/edit/{id}', [CompDetailsController::class, 'editDetails'])->name('details.edit');
Route::post('/update/{id}', [CompDetailsController::class, 'upDetails'])->name('details.update');

//Seedling Routes
Route::get('sd/view', [SeedlingController::class, 'viewSd'])->name('sd.view');
Route::get('sd/add', [SeedlingController::class, 'addSd'])->name('sd.add');

Route::post('sd/store', [SeedlingController::class, 'storeSd'])->name('sd.store');
Route::get('sd/edit/{id}', [SeedlingController::class, 'editSd'])->name('sd.edit');

Route::post('sd/update/{id}', [SeedlingController::class, 'updateSd'])->name('sd.update');
Route::get('sd/delete/{id}', [SeedlingController::class, 'deleteSd'])->name('sd.delete');

//Seedling Details
Route::get('sd/detail/{id}', [SeedlingController::class, 'seed'])->name('sd.details');


//Nursery Routes
Route::get('nrs/view', [NurseryController::class, 'viewNrs'])->name('nrs.view');
Route::get('nrs/add', [NurseryController::class, 'addNrs'])->name('nrs.add');

Route::post('nrs/store', [NurseryController::class, 'storeNrs'])->name('nrs.store');
Route::get('nrs/edit/{id}', [NurseryController::class, 'editNrs'])->name('nrs.edit');

Route::post('nrs/update/{id}', [NurseryController::class, 'updateNrs'])->name('nrs.update');
Route::get('nrs/delete/{id}', [NurseryController::class, 'delNrs'])->name('nrs.delete');

//NS Routes
Route::get('ns/view', [NSController::class, 'viewNS'])->name('ns.view');
Route::get('ns/add', [NSController::class, 'addNS'])->name('ns.add');

Route::post('ns/store', [NSController::class, 'storeNS'])->name('ns.store');
Route::get('ns/edit/{id}', [NSController::class, 'editNS'])->name('ns.edit');

Route::post('ns/update/{id}', [NSController::class, 'updateNS'])->name('ns.update');

//SN Routes
Route::get('sn/view', [ServNameController::class, 'viewSN'])->name('sn.view');
Route::get('sn/add', [ServNameController::class, 'addSN'])->name('sn.add');

Route::post('sn/store', [ServNameController::class, 'storeSN'])->name('sn.store');
Route::get('sn/edit/{id}', [ServNameController::class, 'editSN'])->name('sn.edit');

Route::post('sn/update/{id}', [ServNameController::class, 'updateSN'])->name('sn.update');

//Service Routes
Route::get('srv/view', [ServiceController::class, 'viewSrv'])->name('srv.view');
Route::get('srv/add', [ServiceController::class, 'addSrv'])->name('srv.add');

Route::post('srv/store', [ServiceController::class, 'storeSrv'])->name('srv.store');
Route::get('srv/edit/{id}', [ServiceController::class, 'editSrv'])->name('srv.edit');

Route::post('srv/update/{id}', [ServiceController::class, 'updateSrv'])->name('srv.update');
Route::get('srv/delete/{id}', [ServiceController::class, 'delSrv'])->name('srv.delete');

Route::get('/service/details/{id}', [ServiceController::class, 'getServ']);

//Location Routes
Route::get('loc/view', [LocationController::class, 'viewLoc'])->name('loc.view');
Route::get('loc/add', [LocationController::class, 'addLoc'])->name('loc.add');

Route::post('loc/store', [LocationController::class, 'storeLoc'])->name('loc.store');
Route::get('loc/edit/{id}', [LocationController::class, 'editLoc'])->name('loc.edit');

Route::post('loc/update/{id}', [LocationController::class, 'updateLoc'])->name('loc.update');

//Project Routes
Route::get('pro/view', [ProjectController::class, 'viewPro'])->name('pro.view');
Route::get('pro/add', [ProjectController::class, 'addPro'])->name('pro.add');

Route::post('pro/store', [ProjectController::class, 'storePro'])->name('pro.store');
Route::get('pro/edit/{id}', [ProjectController::class, 'editPro'])->name('pro.edit');

Route::post('pro/update/{id}', [ProjectController::class, 'updatePro'])->name('pro.update');

//Project-Section Routes
Route::get('pro/sect/view', [ProjectSectionController::class, 'viewSect'])->name('sect.view');
Route::get('pro/sect/add', [ProjectSectionController::class, 'addSect'])->name('sect.add');

Route::post('pro/sect/store', [ProjectSectionController::class, 'storeSect'])->name('sect.store');
Route::get('pro/sect/edit/{id}', [ProjectSectionController::class, 'editSect'])->name('sect.edit');

Route::post('pro/sect/update/{id}', [ProjectSectionController::class, 'updateSect'])->name('sect.update');
Route::get('pro/sect/delete/{id}', [ProjectSectionController::class, 'delSect'])->name('sect.delete');

//Project-Sub-Section Routes
Route::get('sub/sect/view', [ProsubSectController::class, 'viewSubSect'])->name('sub.sect.view');
Route::get('sub/sect/add', [ProsubSectController::class, 'addSubSect'])->name('sub.sect.add');

Route::post('sub/sect/store', [ProsubSectController::class, 'storeSubSect'])->name('sub.sect.store');
Route::get('sub/sect/edit/{id}', [ProsubSectController::class, 'editSubSect'])->name('sub.sect.edit');

Route::post('sub/sect/update/{id}', [ProsubSectController::class, 'upSubSect'])->name('sub.sect.update');

//Ajax GET Routes
Route::get('getSect/{id}', [ProsubSectController::class, 'getSection'])->name('get.sect');
