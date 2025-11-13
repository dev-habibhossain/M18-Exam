<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Management System</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <nav class="bg-white shadow p-4">
    <div class="container mx-auto flex justify-between">
      <a href="{{ url('/') }}" class="font-bold text-xl">Product Manager</a>
      <a href="{{ url('/products/create') }}" class="text-blue-600 hover:underline">Add Product</a>
    </div>
  </nav>

  <main>
    @yield('content')
  </main>
</body>
</html>