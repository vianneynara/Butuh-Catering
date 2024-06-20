<!doctype html>
<html lang="en" class="min-w-96">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
    @vite('resources/css/app.css')
</head>
<body class="max-w-[480px] m-auto">
<nav class="flex w-full h-[80px] items-center gap-3 mb-3 shadow-md bg-[#FFFAF2]">
    <img class="ml-3 w-[30px] h-[30px] rounded-md" src="https://placeholder.com/30x30" alt="">
    <p class="font-bold text-[#D1A146]">Pembayaran</p>
</nav>
<div class="flex flex-col gap-3 h-vh bg-gray-100">
    <div class="flex border w-full items-center justify-between shadow-md bg-white py-[3px]">
        <div class="ml-3 h-[60px]">
            <p class="text-[11px] font-bold ">Alamat Pengiriman</p>
            <p class="text-[11px] text-[#9B9B9B] h-[12px]">Kampus 3 Sanata Dharma</p>
            <p class="text-[11px] text-[#9B9B9B] h-[12px]">Jl. Paingan, Krodan, Maguwoharjo, Kec.Depok, Kebupaten
                Sleman</p>
            <p class="text-[11px] text-[#9B9B9B] h-[12px]">Daerah Istimewa Yogyakarta 55281</p>
        </div>
        <img class="w-[30px] h-[30px] mr-3 rounded-md" src="https://placeholder.com/30" alt="">
    </div>
    <div class="flex justify-between items-center h-[60px] border shadow-md bg-white">
        <div class="flex">
            <img src="https://placeholder.com/40" class="px-3 rounded-md" alt="">
            <div class="flex flex-col">
                <p class="text-[13px] font-bold">Kuenya WZ</p>
                <p class="text-[12px]">Paingan, Yogyakarta</p>
            </div>
        </div>
        <img src="https://placeholder.com/30" class="mr-3 rounded-md" alt="">
    </div>
    <div class="w-full flex justify-center">
        <div class="flex border items-center w-[93%] h-[65px] rounded-md shadow-md bg-white">
            <img src="https://placeholder.com/55" class="mx-3 rounded-md" alt="">
            <div class="flex flex-col">
                <p class="text-[13px]">Sosis Solo</p>
                <p class="text-[11px] font-bold">Rp 3.000</p>
                <div class="flex justify-center items-center border w-9 h-5 rounded-md border-[#D1A146]">
                    <p class="text-[12px]">1</p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full flex justify-center">
        <div class="flex border items-center w-[93%] h-[65px] rounded-md shadow-md bg-white">
            <img src="https://placeholder.com/55" class="mx-3 rounded-md" alt="">
            <div class="flex flex-col">
                <p class="text-[13px]">Sosis Solo</p>
                <p class="text-[11px] font-bold">Rp 3.000</p>
                <div class="flex justify-center items-center border w-9 h-5 rounded-md border-[#D1A146]">
                    <p class="text-[12px]">1</p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full flex justify-center">
        <div class="flex border items-center w-[93%] h-[65px] rounded-md shadow-md bg-white">
            <img src="https://placeholder.com/55" class="mx-3 rounded-md" alt="">
            <div class="flex flex-col">
                <p class="text-[13px]">Sosis Solo</p>
                <p class="text-[11px] font-bold">Rp 3.000</p>
                <div class="flex justify-center items-center border w-9 h-5 rounded-md border-[#D1A146]">
                    <p class="text-[12px]">1</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col border pl-3 shadow-md bg-[#FFFAF2]">
        <p class="text-[11px] my-1 font-bold">Metode Pengiriman</p>
        <div class="my-1">
            <p class="text-[9px] m-0">Pengiriman Oleh Toko</p>
            <p class="text-[11px] m-0 font-bold">Rp 15.000</p>
        </div>
    </div>
</div>
<div class="fixed flex justify-between items-center bottom-0 m-auto border border-t-[#D1A146] w-full max-w-[480px]
h-[60px]">
    <div class="ml-3">
        <p class="text-[13px] h-3.5">Total</p>
        <p class="text-[15px] font-bold h-5">Rp 30.000</p>
    </div>
    <button class="border rounded-[10px] bg-[#D1A146] text-gray-100 w-[120px] h-[40px]
    mr-3">Lanjut
    </button>
</div>
</body>
</html>
