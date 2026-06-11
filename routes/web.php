<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Added a new line
    return view('welcome');
});
