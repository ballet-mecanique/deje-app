<?php

use App\Http\Controllers\AddInvoiceToSettlementController;
use App\Http\Controllers\RemoveInvoiceFromSettlementController;
use App\Http\Controllers\SettlementController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Pianola Routes
|--------------------------------------------------------------------------
|
| Here is where you can register routes that intercept the default behaviour in
| your application. The routes are loaded by the RouteServiceProvider of the
| Pianola package and are automatically guarded by the auth middleware.
|
*/

Route::get('settlements/{id}', [SettlementController::class, 'show']);

Route::post('add-invoice-to-settlement/{invoiceId}/{settlementId}', AddInvoiceToSettlementController::class);
Route::post('remove-invoice-from-settlement/{invoiceId}', RemoveInvoiceFromSettlementController::class);
