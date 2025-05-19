<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/yoyo', function () {
    return 'this is yoyo';
});
