<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LedgerController;
use App\Http\Controllers\Backend\ReceiptController;


//Ledger Routes
Route::get('lg/view', [LedgerController::class, 'viewLedger'])->name('lg.view');
Route::get('lg/add', [LedgerController::class, 'addLedger'])->name('lg.add');

Route::post('lg/store', [LedgerController::class, 'storeLedger'])->name('lg.store');

//Receipt Routes
Route::get('/receipts', [ReceiptController::class, 'viewReceipt'])->name('receipt.view');

Route::get('/make_payment/{id}', [ReceiptController::class, 'billShow'])->name('make.payment');
Route::post('/make_payment/store/{id}', [ReceiptController::class, 'storePayment'])->name('make.payment.store');

//Order
Route::get('/allocation/{id}', [ReceiptController::class, 'allocDts'])->name('order.allocation.receipt');
