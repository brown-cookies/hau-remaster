<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'index'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/web/learning.php';
require __DIR__.'/web/portal.php';
