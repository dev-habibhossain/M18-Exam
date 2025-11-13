
@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center h-[80vh] text-center px-4">
  <h1 class="text-4xl font-bold mb-4">Welcome to Product Management System</h1>
  <p class="text-gray-600 mb-8 max-w-xl">
    Manage your products easily — create, view, edit, and delete products all in one place.
  </p>

  <div class="space-x-4">
    <a href="{{ url('/products') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
      View All Products
    </a>
    <a href="{{ url('/products/create') }}" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition">
      Add New Product
    </a>
  </div>
</div>
@endsection
