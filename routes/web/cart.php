<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\CartController;


Route::get('/view', [CartController::class, 'viewCart'])->name('cart.view');
Route::get('/view/projects', [CartController::class, 'viewProjectsCart'])->name('cart.view.projects');
Route::get('/trees/view', [CartController::class, 'viewTrees'])->name('cart.trees.view');
//Route::get('/checkout', [CartController::class, 'checkOut'])->name('cart.checkout');
Route::post('/store', [CartController::class, 'storeCart'])->name('cart.store');

Route::post('/store/product', [CartController::class, 'storeProduct'])->name('cart.product.store');
Route::get('/remove/product', [CartController::class, 'removeProduct'])->name('cart.product.remove');

Route::post('/store/plot', [CartController::class, 'storePlot'])->name('cart.plot.store');

Route::post('/sb/store', [CartController::class, 'storeSbCart'])->name('cart.sub.store');

Route::post('/ep/store', [CartController::class, 'storeEProduct'])->name('eproduct.store');
Route::post('/donate/tree/store', [CartController::class, 'storeTrees'])->name('donate.trees.store');

Route::get('/subsect/details/{id}', [CartController::class, 'subSectDts'])->name('subsect.details');

//Shop Routes
Route::get('/shop/view', [CartController::class, 'viewShop'])->name('shop.view');
Route::get('/shop/project/view', [CartController::class, 'subPro'])->name('shop.project.view');

Route::post('/store/items', [CartController::class, 'storeCartItems'])->name('cart.items.store');

Route::post('/store/project/items', [CartController::class, 'storeProjectItems'])->name('cart.project.items.store');

//Cart Orders
Route::get('/cart/order', [CartController::class, 'viewCartOrder'])->name('cart.order.view');
Route::get('/cart/order/edit/{id}', [CartController::class, 'editDeliveryStatus'])->name('cart.order.edit');

Route::get('/cart/order/show/{id}', [CartController::class, 'show'])->name('cart.order.show');
Route::get('/cart/project/order/show/{id}', [CartController::class, 'showProject'])->name('cart.project.order.show');

Route::post('/cart/order/update/{id}', [CartController::class, 'updateDeliveryStatus'])->name('cart.order.update');

//Project Orders
Route::get('/cart/project/order', [CartController::class, 'viewProjectOrder'])->name('cart.project.order.view');

//Cart Items
Route::get('/cart/item', [CartController::class, 'viewCartItems'])->name('cart.item.view');
Route::get('/cart/project/item', [CartController::class, 'viewProjectItems'])->name('cart.project.item.view');

Route::get('/delivery/detail', [CartController::class, 'deliveryReport'])->name('delivery.report');
Route::get('/delivery/status', [CartController::class, 'viewDeliveryDetails'])->name('delivery.project.report');