<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/reservasi grooming', function () {
    return view('reservasi grooming');
});

Route::get('/cek reservasi', function () {
    return view('cek reservasi');
});

Route::get('/detail reservasi', function () {
    return view('detail reservasi');
});