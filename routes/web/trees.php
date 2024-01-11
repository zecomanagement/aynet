<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\DonateTreesController;

Route::get('view/', [DonateTreesController::class, 'viewTrees'])->name('view.trees');
Route::get('add/', [DonateTreesController::class, 'addTrees'])->name('add.trees');

Route::post('store/', [DonateTreesController::class, 'storeTrees'])->name('store.trees');

//Tree Detail
Route::get('details/{id}', [DonateTreesController::class, 'treeDts'])->name('detail.trees');

