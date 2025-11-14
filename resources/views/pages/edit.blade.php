@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 mt-8 rounded shadow">
  <h2 class="text-xl font-bold mb-4">Edit Product</h2>
  <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4">
    <div>
      <label class="block font-medium">Name</label>
      <input type="text" value="{{ $product->name }}" name="name" class="w-full border rounded p-2">
    </div>
    <div>
      <label class="block font-medium">Description</label>
      <textarea name="description" class="w-full border rounded p-2">{{ $product->description }}</textarea>
    </div>
    <div class="grid grid-cols-2 gap-4">
      <div>
        <label class="block font-medium">Price</label>
        <input type="number" value="{{ $product->price }}" name="price" class="w-full border rounded p-2">
      </div>
      <div>
        <label class="block font-medium">Stock</label>
        <input type="number" value="{{ $product->stock }}" name="stock" class="w-full border rounded p-2">
      </div>
    </div>
    <div>
      <label class="block font-medium">Image</label>
      <input type="file" name="image" class="w-full border rounded p-2">
      <img src="{{ $product->image }}" class="mt-2 rounded w-32" alt="Current Image">
    </div>
    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Update</button>
  </form>
</div>
@endsection
