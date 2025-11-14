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

        $products = DB::table('product')->orderBy('id', 'desc')->paginate(6);

        return view('pages.products', ['products' => $products]);
    }
    
    
    public function create()
    {
        return view('pages.create');
    }


    public function store(Request $request)
    {
        $imagePath = null;
        $name = $request->input('name');
        $product_id = $request->input('product_id');
        $description = $request->input('description');
        $stock = $request->input('stock');
        $price = $request->input('price');
        if($request->hasFile('image')){
                $imagePath = $request->file('image')->store('images', 'public');
            }

        DB::table('product')->insert([
            'name' => $name,
            'product_id' => $product_id,
            'description' => $description,
            'stock' => $stock,
            'price' => $price,
            'image' => $imagePath
        ]);

        return redirect('/products')->with('success', 'Product added successfully!');
        
    }

    public function show($id)
    {
        $product = DB::table('product')->where('id', $id)->first();

        return view('pages.show', ['product' => $product]);    
    }
    public function edit($id)
    {
        $product = DB::table('product')->where('id', $id)->first();

        return view('pages.edit', ['product' => $product])->with('success', 'Product updated successfully!');
    }
}
