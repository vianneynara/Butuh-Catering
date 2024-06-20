<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product['name'] }} | Butuh Catering</title>
    @vite('resources/css/app.css')
</head>

<body class="max-w-[568px]">
    <div class="w-full min-h-max flex justify-center mt-[70px]">
        <x-nav-bar></x-nav-bar>
        <div class="px-4">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://placehold.co/600" alt="{{ $product['name'] }}" class="object-cover w-fit">
                <!-- <img src="{{ asset($product['image_url']) }}" alt="{{ $product['name'] }}" class="h-96 object-cover"> -->
                <div class="p-4">
                    <h3 class="text-lg font-semibold">{{ $product['name'] }}</h3>
                    <p class="text-gray-600">{{ $product['description'] }}</p>
                    <p class="text-gray-800 font-bold mt-2">Rp {{ number_format($product['price'], 0) }}</p>
                </div>
                <div id="shopComponent" class="p-4">
                    <div class="flex flex-col m-0">
                        <p class="text-lg font-bold">{{ $shop['name'] }}</p>
                        <p class="text-md">{{ $shop['address'] }}</p>
                    </div>
                </div>
                <form action="{{ route('maintenance') }}" method="GET" class="p-4 bg-gray-100">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product['product_id'] }}">
                    <button type="submit" class="bg-[#D1A146] text-white px-4 py-2 rounded-md">Masukan ke keranjang</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>