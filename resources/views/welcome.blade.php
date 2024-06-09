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
    <!-- Navigation Bar -->
    <nav class="fixed top-0 right-0 p-4 bg-white shadow-md rounded-bl-md flex items-center">
        <a href="{{ route('login') }}" class="mr-4 text-sm font-semibold text-gray-900 hover:text-indigo-600">Log in</a>
        <a href="{{ route('register') }}" class="text-sm font-semibold text-gray-900 hover:text-indigo-600">Register</a>
    </nav>

    <!-- Main Content -->
    <div class="bg-white mt-16"> <!-- Added margin-top for the content to be below the navbar -->
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <!-- Product 1 -->
                <div class="group relative">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="{{ asset('nasi-kotak-23k.png') }}" alt="Paket A" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
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
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:h-80">
                        <img src="{{ asset('Nasi Kotak 2.png') }}" alt="Paket Ayam Kecap" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
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
