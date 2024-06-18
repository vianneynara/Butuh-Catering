<!doctype html>
<html lang="id" class="w-full m-auto border border-solid">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    @vite('resources/css/app.css')
</head>
<body >
<div class="max-w-lg flex flex-col items-center border border-solid m-auto">
    <div class="w-full flex border border-solid gap-5">
        <img src="../../public/icons/arrow-back.svg">
        <p>Keranjang Belanja</p>
    </div
    >

    <div class="w-full">
        <div class="">
            <details class="dropdown">
                <summary class="m-1 btn w-96">open or close</summary>
                <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52">
                    <li><a>Item 1</a></li>
                    <li><a>Item 2</a></li>
                </ul>
            </details>
        </div>
    </div>
</div>
</body>
</html>
