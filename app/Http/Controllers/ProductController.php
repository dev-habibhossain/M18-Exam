<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function products()
    {

        $products = DB::table('product')->get();

        return view('pages.products', ['products' => $products]);
    }
    public function create()
    {
        return view('pages.create');
    }
    public function show($id)
    {
        $product = DB::table('product')->where('id', $id)->first();

        return view('pages.show', ['product' => $product]);    
    }
    public function edit()
    {
        return view('pages.edit');
    }
}
