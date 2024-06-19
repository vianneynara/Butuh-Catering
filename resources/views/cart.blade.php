<!doctype html>
<html lang="id" class="w-full m-auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="max-w-lg flex flex-col items-center m-auto border">
    <div class="w-full h-[70px] flex items-center gap-5">
        <img src="../../public/icons/arrow-back.svg">
        <p>Keranjang Belanja</p>
    </div>

    <div class="w-full">
        <x-cart-link :index="1"></x-cart-link>
    </div>
</div>
</body>
</html>
