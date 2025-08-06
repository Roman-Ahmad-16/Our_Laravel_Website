<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('adminDashboard.dashboard');
});



                                // FRONT ROUTES

Route::get("/", [FrontController::class, 'index'])->name('front.index');
