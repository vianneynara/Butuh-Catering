<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tailwind</title>
    <!-- Link to Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<nav class="fixed top-0 right-0 w-full p-4 bg-white shadow-md rounded-bl-md flex items-center justify-between">
    <!-- Search bar centered -->
    <div class="flex-1 flex justify-center">
        <form action="{{ route('search') }}" method="GET" class="w-full max-w-md flex">
            <input type="text" name="query" placeholder="Search..." class="w-full px-4 py-2 rounded-md border border-gray-300 focus:ring focus:ring-indigo-200 focus:border-indigo-300">
            <button type="submit" class="ml-2 px-4 py-2 bg-indigo-600 text-white rounded-md">Search</button>
        </form>
    </div>
    <!-- User info and logout on the right -->
    <div class="flex items-center ml-4">
        @if(Auth::check())
            <!-- Heroicon User Circle -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 2a5 5 0 100 10 5 5 0 000-10zM2 18a8 8 0 1116 0H2z" clip-rule="evenodd" />
            </svg>
            <span class="ml-3 text-gray-700">{{ Auth::user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST" class="ml-3">
                @csrf
                <button type="submit" class="text-red-500">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="text-indigo-600">Login</a>
        @endif
    </div>
</nav>

<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Search Results</h1>

    @if($products->isEmpty())
        <p class="text-center text-gray-600">No products found.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset($product->image_path) }}" alt="{{ $product->namaProduk }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">{{ $product->namaProduk }}</h3>
                        <p class="text-gray-600">{{ $product->detail }}</p>
                        <p class="text-gray-800 font-bold mt-2">Rp {{ number_format($product->harga, 2) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
</body>
</html>
