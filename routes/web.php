<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;



Route::get('/admin/dashboard', function () {
    return view('adminDashboard.dashboard');
});

Route::get('/team', [TeamController::class, 'index'])->name('teams.index');
Route::get('/team/create', [TeamController::class, 'add'])->name('teams.add');
Route::post('/team/store', [TeamController::class, 'store'])->name('teams.store');
Route::get('/team/edit/{id}', [TeamController::class, 'edit'])->name('teams.edit');
Route::put('/team/update/{id}', [TeamController::class, 'update'])->name('teams.update');
Route::delete('/team/delete/{id}', [TeamController::class, 'destroy'])->name('teams.destroy');




    Route::get('/testimonial',[TestimonialController::class,'index'])->name('testimonial.index');
    Route::get('/testimonial/add',[TestimonialController::class,'add'])->name('testimonial.add');
    Route::post('/testimonial/store',[TestimonialController::class,'store'])->name('testimonial.store');
    Route::get('/testimonial/edit/{id}',[TestimonialController::class,'edit'])->name('testimonial.edit');
    Route::post('/testimonial/update/{id}',[TestimonialController::class,'update'])->name('testimonial.update');
    Route::post('/testimonial/delete/{id}',[TestimonialController::class,'delete'])->name('testimonial.delete');
                                // FRONT ROUTES

Route::get("/", [FrontController::class, 'index'])->name('front.index');
