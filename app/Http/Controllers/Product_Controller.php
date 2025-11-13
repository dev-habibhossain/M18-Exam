<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product_Controller extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function products()
    {
        return view('pages.products');
    }
    public function create()
    {
        return view('pages.create');
    }
    public function show()
    {
        return view('pages.show');    
    }
    public function edit()
    {
        return view('pages.edit');
    }
}
