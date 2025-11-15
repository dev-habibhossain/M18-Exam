<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function products()
    {

        $products = DB::table('product')->orderBy('id', 'desc')->paginate(6);

        return view('pages.index', ['products' => $products]);
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
            'image' => $imagePath,
            'created_at' => now(),
            'updated_at' => now()
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

    public function update(Request $request, $id){
        $name = $request->name;
        $description = $request->description;
        $stock = $request->stock;
        $price = $request->price;
        
        $oldProduct = DB::table('product')->where('id', $id)->first();
        $imagePath = $oldProduct->image;


        if($request->hasFile('image')){
            // Delete old image if exists
            Storage::disk('public')->delete( $imagePath);
            $imagePath = $request->file('image')->store('images', 'public');
        }

        DB::table('product')->where('id', $id)->update([
            'name' => $name,
            'description' => $description,
            'stock' => $stock,
            'price' => $price,
            'image' => $imagePath,
            'updated_at' => now()
        ]);

        return redirect('/products')->with('success', 'Product updated successfully!');
    }
}
