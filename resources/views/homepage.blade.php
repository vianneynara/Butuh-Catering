<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    @vite('resources/css/app.css')
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="bg-gray-100">

<nav class="fixed top-0 right-0 w-full p-4 bg-white shadow-md rounded-bl-md flex items-center justify-between">
    <!-- Search bar centered -->
    <div class="flex-1 flex justify-center">
        <form action="{{ route('search') }}" method="GET" class="w-full max-w-md flex">
            <input type="text" name="query" placeholder="Search..." class="w-full px-4 py-2 rounded-md border border-gray-300 focus:ring focus:ring-indigo-200 focus:border-indigo-300">
        </form>
    </div>

    <!-- User info and logout on the right -->
    <div class="flex items-center ml-4">
        <!-- Bell Icon -->
        <button class="text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                 style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                <path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12
                 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0
                  0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19
                   17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0
                    .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>
        </button>
        <!-- Chat Icon -->
        <button class="text-gray-700 ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                 style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                <path d="M5 18v3.766l1.515-.909L11.277 18H16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2H4c-1.103
                 0-2 .897-2 2v8c0 1.103.897 2 2 2h1zM4 8h12v8h-5.277L7 18.234V16H4V8z"></path>
                <path d="M20 2H8c-1.103 0-2 .897-2 2h12c1.103 0 2 .897 2 2v8c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2z"></path></svg>
        </button>
        <!-- User Icon -->
        <form action="{{ route('logout') }}" method="POST" class="ml-3">
            @csrf
            <button type="submit" class="text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                     style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M16 13v-2H7V8l-5 4 5 4v-3z">
                    </path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103
                     0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>
            </button>
        </form>
    </div>
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
