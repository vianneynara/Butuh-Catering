<!DOCTYPE html>
<html lang="en" class="min-w-96">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    @vite('resources/css/app.css')
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="bg-gray-100">
<x-nav-bar></x-nav-bar>
<div class="bg-white">
    <div class="w-full flex justify-center mt-[70px]">
        <x-jumbotron></x-jumbotron>
    </div>
    <div class="mx-auto max-w-2xl pr-4 py-3.5 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 mb-[100px]">
        <!-- Tautan Jawa, Sumatera, Kalimantan, Sulawesi, Bali -->
        <div class="ml-4 snap-x flex gap-3 overflow-x-auto scrollbar-hide">
            <x-category>Jawa</x-category>
            <x-category>Sumatra</x-category>
            <x-category>Kalimantan</x-category>
            <x-category>Sulawesi</x-category>
            <x-category>Bali</x-category>
        </div>
        <!-- Judul dengan latar belakang oranye -->
        <x-product-section-title>Jenis Hidangan</x-product-section-title>

        <div class="w-full ml-4 flex flex-wrap justify-between scrollbar-hide gap-4">
            <x-product-circle>Berkuah</x-product-circle>
            <x-product-circle>Berkuah</x-product-circle>
            <x-product-circle>Berkuah</x-product-circle>
            <x-product-circle>Berkuah</x-product-circle>
            <x-product-circle>Berkuah</x-product-circle>
            <x-product-circle>Berkuah</x-product-circle>
            <x-product-circle>Berkuah</x-product-circle>
            <x-product-circle>Berkuah</x-product-circle>
            <x-product-circle>Berkuah</x-product-circle>
            <x-product-circle>Berkuah</x-product-circle>
        </div>
        <x-product-section-title>Produk Terlaris</x-product-section-title>
        <div class="flex overflow-x-auto scrollbar-hide w-full">
            <x-product-square title="Rendang Gokil" price="Rp 10.000" addr="Paingan, Yogyakarta" :itemSold="31"></x-product-square>
            <x-product-square title="Rendang Gokil" price="Rp 10.000" addr="Paingan, Yogyakarta" :itemSold="31"></x-product-square>
            <x-product-square title="Rendang Gokil" price="Rp 10.000" addr="Paingan, Yogyakarta" :itemSold="31"></x-product-square>
            <x-product-square title="Rendang Gokil" price="Rp 10.000" addr="Paingan, Yogyakarta" :itemSold="31"></x-product-square>
            <x-product-square title="Rendang Gokil" price="Rp 10.000" addr="Paingan, Yogyakarta" :itemSold="31"></x-product-square>
            <x-product-square title="Rendang Gokil" price="Rp 10.000" addr="Paingan, Yogyakarta" :itemSold="31"></x-product-square>
        </div>
        <x-product-section-title>Produk di Sekitarmu</x-product-section-title>
        <div class="flex overflow-x-auto scrollbar-hide w-full">
            <x-product-square title="Rendang Gokil" price="Rp 10.000" addr="Paingan, Yogyakarta" :itemSold="31"></x-product-square>
            <x-product-square title="Rendang Gokil" price="Rp 10.000" addr="Paingan, Yogyakarta" :itemSold="31"></x-product-square>
            <x-product-square title="Rendang Gokil" price="Rp 10.000" addr="Paingan, Yogyakarta" :itemSold="31"></x-product-square>
            <x-product-square title="Rendang Gokil" price="Rp 10.000" addr="Paingan, Yogyakarta" :itemSold="31"></x-product-square>
            <x-product-square title="Rendang Gokil" price="Rp 10.000" addr="Paingan, Yogyakarta" :itemSold="31"></x-product-square>
            <x-product-square title="Rendang Gokil" price="Rp 10.000" addr="Paingan, Yogyakarta" :itemSold="31"></x-product-square>
        </div>
    </div>
</div>
</body>
</html>
