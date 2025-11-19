<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/articoli' , function () {
    return view('articoli');
} );

Route::get('/chi-siamo' , function () {
    return view('chi-siamo');
} );