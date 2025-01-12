<!doctype html>
<html lang="id" class="w-full m-auto bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="max-w-lg flex flex-col items-center m-auto">
    <div class="w-full h-[70px] flex items-center gap-3 bg-[#FFFAF2] shadow-md">
        <img class="ml-2" src="https://placeholder.com/30x30">
        <p>Keranjang Belanja</p>
    </div>

    <div class="w-full mt-2">
        <x-cart-link :index="1"></x-cart-link>
    </div>
</div>
</body>
</html>
