<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WhyChooseUsController;



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



Route::get('/whychooseus',[WhyChooseUsController::class,'index'])->name('whychooseus.index');
Route::get('/whychooseus/add',[WhyChooseUsController::class,'add'])->name('whychooseus.add');
Route::post('/whychooseus/store',[WhyChooseUsController::class,'store'])->name('whychooseus.store');
Route::get('/whychooseus/edit/{id}',[WhyChooseUsController::class,'edit'])->name('whychooseus.edit');
Route::post('/whychooseus/update/{id}',[WhyChooseUsController::class,'update'])->name('whychooseus.update');
Route::post('/whychooseus/delete/{id}',[WhyChooseUsController::class,'delete'])->name('whychooseus.delete');
                                // FRONT ROUTES

Route::get("/", [FrontController::class, 'index'])->name('front.index');
