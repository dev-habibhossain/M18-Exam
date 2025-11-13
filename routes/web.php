<?php

use App\Http\Controllers\Product_Controller as Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'index']);
Route::get('/products', [Controller::class, 'products']);
Route::get('/products/create', [Controller::class, 'create']);
Route::get('/products/show', [Controller::class, 'show']);
Route::get('/products/edit', [Controller::class, 'edit']);