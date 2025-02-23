<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShortUrlController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::middleware([RoleMiddleware::class])->group(function () {
        Route::get('/superadmin/dashboard', [DashboardController::class, 'superAdminDashboard'])->name('superadmin.dashboard');
        Route::prefix('super-admin')->middleware(['role.access:superadmin'])->group(function () {
            Route::get('/create', [SuperAdminController::class, 'index'])->name('superadmin.create');
            Route::post('/invite', [SuperAdminController::class, 'sendInvitation'])->name('superadmin.invite');
        });
        
    });


    Route::middleware(['role:clientadmin'])->group(function () {
        Route::get('/clientadmin/dashboard', [DashboardController::class, 'clientAdminDashboard'])->name('clientadmin.dashboard');
   
    });
    Route::get('/createshorturl', [ShortUrlController::class, 'create'])->name('shorten.create');
    Route::post('/shorten', [ShortUrlController::class, 'store'])->name('shorten.store');
    Route::get('/{shortCode}', [ShortUrlController::class, 'redirect'])->name('shorten.redirect');
});








Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
