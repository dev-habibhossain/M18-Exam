@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-6 mt-8 rounded shadow">
  <img src="{{ $product->image }}" alt="Product" class="rounded w-full h-64 object-cover mb-4">
  <h2 class="text-2xl font-bold mb-2">{{ $product->name }}</h2>
  <p class="text-gray-600 mb-2">Product ID: {{ $product->product_id}}</p>
  <p class="mb-4">{{ $product->description }}</p>
  <p class="font-bold text-lg mb-2">Price: ${{ $product->price }}</p>
  <p class="text-gray-700 mb-6">Stock: {{ $product->stock }}</p>
  <a href="{{ url('/products') }}" class="text-blue-600 hover:underline">Back to list</a>
</div>
@endsection
