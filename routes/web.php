<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\TeamController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('adminDashboard.dashboard');
});

Route::get('/team', [TeamController::class, 'index'])->name('teams.index');
Route::get('/team/create', [TeamController::class, 'add'])->name('teams.add');
Route::post('/team/store', [TeamController::class, 'store'])->name('teams.store');
Route::get('/team/edit/{id}', [TeamController::class, 'edit'])->name('teams.edit');
Route::put('/team/update/{id}', [TeamController::class, 'update'])->name('teams.update');
Route::delete('/team/delete/{id}', [TeamController::class, 'destroy'])->name('teams.destroy');

                                // FRONT ROUTES

Route::get("/", [FrontController::class, 'index'])->name('front.index');
