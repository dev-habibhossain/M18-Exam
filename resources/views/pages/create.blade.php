@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 mt-8 rounded shadow">
  <h2 class="text-xl font-bold mb-4">Add New Product</h2>
  <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4">
    <div>
      <label class="block font-medium">Product ID</label>
      <input type="text" class="w-full border rounded p-2" placeholder="Enter Product ID">
    </div>
    <div>
      <label class="block font-medium">Name</label>
      <input type="text" class="w-full border rounded p-2" placeholder="Enter Product Name">
    </div>
    <div>
      <label class="block font-medium">Description</label>
      <textarea class="w-full border rounded p-2" placeholder="Write description..."></textarea>
    </div>
    <div class="grid grid-cols-2 gap-4">
      <div>
        <label class="block font-medium">Price</label>
        <input type="number" class="w-full border rounded p-2" placeholder="0.00">
      </div>
      <div>
        <label class="block font-medium">Stock</label>
        <input type="number" class="w-full border rounded p-2" placeholder="10">
      </div>
    </div>
    <div>
      <label class="block font-medium">Image</label>
      <input type="file" class="w-full border rounded p-2">
    </div>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save Product</button>
  </form>
</div>
@endsection
