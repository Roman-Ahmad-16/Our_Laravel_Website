<?php

use Illuminate\Support\Facades\Route;



Route::get('/admin/dashboard', function () {
    return view('adminDashboard.dashboard');
});

