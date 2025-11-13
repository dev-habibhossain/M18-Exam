<?php

use App\Http\Controllers\ProductController as Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'index']);
Route::get('/products', [Controller::class, 'products']);
Route::get('/products/create', [Controller::class, 'create']);
Route::get('/products/show/{id}', [Controller::class, 'show']);
Route::get('/products/edit', [Controller::class, 'edit']);