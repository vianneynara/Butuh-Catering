<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tailwind</title>
    <!-- Link to Tailwind CSS via CDN -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<nav class="fixed top-0 right-0 w-full p-4 bg-white shadow-md rounded-bl-md flex justify-end items-center">
    <!-- Register Icon -->
    <a href="{{ route('register') }}" class="mr-4 text-gray-700 hover:text-indigo-600">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
            <path d="M19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 8a3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4 3.91 3.91 0 0 0-4 4zm6 0a1.91 1.91 0 0 1-2 2 1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2zM4 18a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2v-1a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v1h2z"></path>
        </svg>
    </a>
    <!-- Login Icon -->
    <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
            <path d="m13 16 5-4-5-4v3H4v2h9z"></path>
            <path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path>
        </svg>
    </a>
</nav>

<div class="mt-20 bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <!-- Tautan Jawa, Sumatera, Kalimantan, Sulawesi, Bali -->
        <div class="flex justify-center space-x-6 mb-6">
            <a href="#" class="text-gray-700 border border-yellow-800 transition duration-300 rounded-full py-2 px-4">Jawa</a>
            <a href="#" class="text-gray-700 border border-yellow-800 transition duration-300 rounded-full py-2 px-4">Sumatera</a>
            <a href="#" class="text-gray-700 border border-yellow-800 transition duration-300 rounded-full py-2 px-4">Kalimantan</a>
            <a href="#" class="text-gray-700 border border-yellow-800 transition duration-300 rounded-full py-2 px-4">Sulawesi</a>
            <a href="#" class="text-gray-700 border border-yellow-800 transition duration-300 rounded-full py-2 px-4">Bali</a>
        </div>
        <!-- Judul dengan latar belakang oranye -->
        <h2 class="text-2xl font-bold tracking-tight text-white bg-yellow-800 px-4 py-2 rounded-md mb-6">Customers also purchased</h2>

        <div class="flex overflow-x-auto space-x-6">
            <!-- Product 1 -->
            <div class="group relative w-64 flex-shrink-0">
                <a href="{{ route('product.show', ['id' => 1]) }}">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="{{ asset('nasi-kotak-23k.png') }}" alt="Paket A" class="w-full h-full object-center object-cover">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-white text-lg">Seturan Catering</span>
                        </div>
                    </div>
                </a>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="{{ route('product.show', ['id' => 1]) }}">
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
            <div class="group relative w-64 flex-shrink-0">
                <a href="{{ route('product.show', ['id' => 2]) }}">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="{{ asset('Nasi Kotak 2.png') }}" alt="Paket Ayam Kecap" class="w-full h-full object-center object-cover">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-white text-lg">Catering Jogja</span>
                        </div>
                    </div>
                </a>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="{{ route('product.show', ['id' => 2]) }}">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Paket Ayam Kecap
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Nasi + Ayam + Kecap + Sayur</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">Rp 15.000,00</p>
                </div>
            </div>

            <!-- Tambahkan produk lainnya di sini -->
        </div>
    </div>
</div>

</body>
</html>
