<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('frontend.home.index');
});

Route::get('/team', function () {
    return view('frontend.our-team.index');
});
