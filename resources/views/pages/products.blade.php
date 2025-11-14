@extends('layouts.app')

@section('content')
@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: "{{ session('success') }}",
        timer: 2500,
        showConfirmButton: false
    });
</script>
@endif

<div class="container mx-auto px-4 py-8">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">All Products</h1>
    <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Product</a>
  </div>

  <div class="grid md:grid-cols-3 gap-6">
    <!-- Example card -->
    @foreach ($products as $product)
    <div class="bg-white rounded-lg shadow p-4">
      <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="rounded w-full h-48 object-cover mb-3">
      <h2 class="text-lg font-semibold">{{ $product->name }}</h2>
      <p class="text-gray-600">{{ $product->description }}</p>
      <p class="font-bold mt-2">${{ $product->price }}</p>
      <div class="flex justify-between mt-4">
        <a href="{{ url('/products/show/' . $product->id) }}" class="text-blue-600 hover:underline">View</a>
        <a href="{{ url('/products/' . $product->id . '/edit') }}" class="text-yellow-600 hover:underline">Edit</a>
        <form action="#" method="POST">
          <button type="submit" class="text-red-600 hover:underline">Delete</button>
        </form>
      </div>
    </div>
    @endforeach
  </div>
  {{ $products->links('pagination::tailwind') }}
</div>
@endsection