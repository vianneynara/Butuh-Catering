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
        <x-product-section-title>Produk
            Terlaris</x-product-section-title>
        <div class="flex overflow-x-auto scrollbar-hide w-full">
            <div class="min-w-[140px] h-[190px] ml-4">
                <img src="https://placeholder.com/140x140" alt="" class="rounded-lg">
                <div class="ml-2">
                    <p class="text-[11px]">Rendang Gokil</p>
                    <p class="text-[13px] m-0">Rp 10.000</p>
                    <div class="flex gap-1.5 m-0">
                        <p class="text-[8px] font-bold">Paingan, Yogyakarta</p>
                        <p class="text-[8px] ">31 Terjual</p>
                    </div>
                </div>
            </div>
            <div class="min-w-[140px] h-[190px] ml-4">
                <img src="https://placeholder.com/140x140" alt="" class="rounded-lg">
                <div class="ml-2">
                    <p class="text-[11px]">Rendang Gokil</p>
                    <p class="text-[13px] m-0">Rp 10.000</p>
                    <div class="flex gap-1.5 m-0">
                        <p class="text-[8px] font-bold">Paingan, Yogyakarta</p>
                        <p class="text-[8px] ">31 Terjual</p>
                    </div>
                </div>
            </div>
            <div class="min-w-[140px] h-[190px] ml-4">
                <img src="https://placeholder.com/140x140" alt="" class="rounded-lg">
                <div class="ml-2">
                    <p class="text-[11px]">Rendang Gokil</p>
                    <p class="text-[13px] m-0">Rp 10.000</p>
                    <div class="flex gap-1.5 m-0">
                        <p class="text-[8px] font-bold">Paingan, Yogyakarta</p>
                        <p class="text-[8px] ">31 Terjual</p>
                    </div>
                </div>
            </div>
            <div class="min-w-[140px] h-[190px] ml-4">
                <img src="https://placeholder.com/140x140" alt="" class="rounded-lg">
                <div class="ml-2">
                    <p class="text-[11px]">Rendang Gokil</p>
                    <p class="text-[13px] m-0">Rp 10.000</p>
                    <div class="flex gap-1.5 m-0">
                        <p class="text-[8px] font-bold">Paingan, Yogyakarta</p>
                        <p class="text-[8px] ">31 Terjual</p>
                    </div>
                </div>
            </div>
            <div class="min-w-[140px] h-[190px] ml-4">
                <img src="https://placeholder.com/140x140" alt="" class="rounded-lg">
                <div class="ml-2">
                    <p class="text-[11px]">Rendang Gokil</p>
                    <p class="text-[13px] m-0">Rp 10.000</p>
                    <div class="flex gap-1.5 m-0">
                        <p class="text-[8px] font-bold">Paingan, Yogyakarta</p>
                        <p class="text-[8px] ">31 Terjual</p>
                    </div>
                </div>
            </div>
            <div class="min-w-[140px] h-[190px] ml-4">
                <img src="https://placeholder.com/140x140" alt="" class="rounded-lg">
                <div class="ml-2">
                    <p class="text-[11px]">Rendang Gokil</p>
                    <p class="text-[13px] m-0">Rp 10.000</p>
                    <div class="flex gap-1.5 m-0">
                        <p class="text-[8px] font-bold">Paingan, Yogyakarta</p>
                        <p class="text-[8px] ">31 Terjual</p>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="w-[40%] bg-[#D1A146] font-bold tracking-tight text-white my-6 px-4 py-1 rounded-r-md">Produk di
            Sekitarmu
        </h2>
        <div class="flex overflow-x-auto scrollbar-hide w-full">
            <div class="min-w-[140px] h-[190px] ml-4">
                <img src="https://placeholder.com/140x140" alt="" class="rounded-lg">
                <div class="ml-2">
                    <p class="text-[11px]">Rendang Gokil</p>
                    <p class="text-[13px] m-0">Rp 10.000</p>
                    <div class="flex gap-1.5 m-0">
                        <p class="text-[8px] font-bold">Paingan, Yogyakarta</p>
                        <p class="text-[8px] ">31 Terjual</p>
                    </div>
                </div>
            </div>
            <div class="min-w-[140px] h-[190px] ml-4">
                <img src="https://placeholder.com/140x140" alt="" class="rounded-lg">
                <div class="ml-2">
                    <p class="text-[11px]">Rendang Gokil</p>
                    <p class="text-[13px] m-0">Rp 10.000</p>
                    <div class="flex gap-1.5 m-0">
                        <p class="text-[8px] font-bold">Paingan, Yogyakarta</p>
                        <p class="text-[8px] ">31 Terjual</p>
                    </div>
                </div>
            </div>
            <div class="min-w-[140px] h-[190px] ml-4">
                <img src="https://placeholder.com/140x140" alt="" class="rounded-lg">
                <div class="ml-2">
                    <p class="text-[11px]">Rendang Gokil</p>
                    <p class="text-[13px] m-0">Rp 10.000</p>
                    <div class="flex gap-1.5 m-0">
                        <p class="text-[8px] font-bold">Paingan, Yogyakarta</p>
                        <p class="text-[8px] ">31 Terjual</p>
                    </div>
                </div>
            </div>
            <div class="min-w-[140px] h-[190px] ml-4">
                <img src="https://placeholder.com/140x140" alt="" class="rounded-lg">
                <div class="ml-2">
                    <p class="text-[11px]">Rendang Gokil</p>
                    <p class="text-[13px] m-0">Rp 10.000</p>
                    <div class="flex gap-1.5 m-0">
                        <p class="text-[8px] font-bold">Paingan, Yogyakarta</p>
                        <p class="text-[8px] ">31 Terjual</p>
                    </div>
                </div>
            </div>
            <div class="min-w-[140px] h-[190px] ml-4">
                <img src="https://placeholder.com/140x140" alt="" class="rounded-lg">
                <div class="ml-2">
                    <p class="text-[11px]">Rendang Gokil</p>
                    <p class="text-[13px] m-0">Rp 10.000</p>
                    <div class="flex gap-1.5 m-0">
                        <p class="text-[8px] font-bold">Paingan, Yogyakarta</p>
                        <p class="text-[8px] ">31 Terjual</p>
                    </div>
                </div>
            </div>
            <div class="min-w-[140px] h-[190px] ml-4">
                <img src="https://placeholder.com/140x140" alt="" class="rounded-lg">
                <div class="ml-2">
                    <p class="text-[11px]">Rendang Gokil</p>
                    <p class="text-[13px] m-0">Rp 10.000</p>
                    <div class="flex gap-1.5 m-0">
                        <p class="text-[8px] font-bold">Paingan, Yogyakarta</p>
                        <p class="text-[8px] ">31 Terjual</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fixed bottom-0 flex justify-evenly items-center w-full h-[90px] mt-3 bg-[#FFFAF2]">
    <div class="min-w-[100px] h-[60px]">
        <button class="flex flex-col items-center m-auto">
            <img class="w-[40px] h-[40px]" src="https://placeholder.com/40x40" alt="">
            <p class="text-[11px]">Keranjang Belanja</p>
        </button>
    </div>
    <div class="min-w-[100px] h-[60px]">
        <button class="flex flex-col items-center m-auto">
            <img class="w-[40px] h-[40px]" src="https://placeholder.com/40x40" alt="">
            <p class="text-[11px]">Beranda</p>
        </button>
    </div>
    <div class="min-w-[100px] h-[60px]">
        <button class="flex flex-col items-center m-auto">
            <img class="w-[40px] h-[40px]" src="https://placeholder.com/40x40" alt="">
            <p class="text-[11px]">Riwayat Pesanan</p>
        </button>
    </div>
</div>

</body>
</html>
