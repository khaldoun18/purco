<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome')->name('welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    Route::view('quote', 'quote.quote')
    ->middleware(['auth', 'verified'])
    ->name('quote');

    Route::get('quote-success', function () {
        // if (session()->has('quote_success')) {
        //     session()->forget('quote_success');
            return view('quote.quote-success');
        // } else {
        //     return redirect()->route('quote');
        // }
    })->middleware(['auth', 'verified'])->name('quote-success');
    
/////order start/////
    Route::view('order', 'order.order')
    ->middleware(['auth', 'verified'])
    ->name('order');

    Route::get('order-success', function () {
        // if (session()->has('order_success')) {
        //     session()->forget('order_success');
            return view('order.order-success');
        // } else {
        //     return redirect()->route('order');
        // }
    })->middleware(['auth', 'verified'])->name('order-success');

    Route::view('order-hold-insufficient-credit', 'order.order-hold-insufficient-credit')
    ->middleware(['auth', 'verified'])
    ->name('order-hold-insufficient-credit');
    
    Route::view('order-hold-overdue-invoice', 'order.order-hold-overdue-invoice')
    ->middleware(['auth', 'verified'])
    ->name('order-hold-overdue-invoice');
////order end////

//// my order start///
    Route::view('my-orders', 'my-orders.my-orders')
    ->middleware(['auth', 'verified'])
    ->name('my-orders');
   
//// my orders end/////

Route::view('info-center', 'info-center')
    ->middleware(['auth', 'verified'])
    ->name('info-center');

//////info start////


////info-end/////

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
