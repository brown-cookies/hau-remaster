<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Student\AccountReceivableController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', [HomeController::class,'index'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');


    Route::group(['prefix'=> 'student'], function () {

        Route::get('/payment-report', [AccountReceivableController::class,'paymentReportPage'])->name('student.paymentReport');
        Route::get('/online-payment', [AccountReceivableController::class, 'onlinePaymentPage'])->name('student.onlinePayment');


    });

});

require __DIR__.'/settings.php';
