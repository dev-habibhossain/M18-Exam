<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/create', function () {
    return view('pages.create');
});
Route::get('/show', function () {
    return view('pages.show');
});
Route::get('/edit', function () {
    return view('pages.edit');
});