<?php

use Illuminate\Support\Facades\Route;

Route::get('/portofolio', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/project', function () {
    return view('project');
});