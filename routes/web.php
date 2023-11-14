<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('', [PaymentController::class, 'index']);
Route::get('payment', [PaymentController::class, 'payment'])->name('payment');
Route::post('confirmation', [PaymentController::class, 'confirmation'])->name('confirmation');
Route::post('processing', [PaymentController::class, 'stkPush'])->name('stkPush');
Route::post('success', [PaymentController::class, 'success'])->name('success');
