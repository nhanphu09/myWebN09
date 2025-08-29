<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/webn09', 'App\Http\Controllers\webn09a@test');

Route::get('/test', 'App\Http\Controllers\test@index');