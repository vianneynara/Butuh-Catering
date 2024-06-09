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

<div class="mt-20 bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>

        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            <!-- Product 1 -->
            <div class="group relative">
                <a href="{{ route('product.show', ['id' => 1]) }}">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 relative">
                        <img src="{{ asset('nasi-kotak-23k.png') }}" alt="Paket A" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-white text-lg">Seturan Catering</span>
                        </div>
                    </div>
                </a>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Paket A
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Nasi + Sayur + Ayam + Telor</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">Rp 20.000,00</p>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="group relative">
                <a href="{{ route('product.show', ['id' => 2]) }}">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:h-80 relative">
                        <img src="{{ asset('Nasi Kotak 2.png') }}" alt="Paket Ayam Kecap" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-white text-lg">Catering Jogja</span>
                        </div>
                    </div>
                </a>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Paket Ayam Kecap
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Nasi + Sayur + Ayam Kecap</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">Rp 18.000,00</p>
                </div>
            </div>

            <!-- More products... -->
        </div>
    </div>
</div>

</body>
</html>
