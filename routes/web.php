<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.layouts');
});

Route::get('/app', function () {
    return view('app');
});
