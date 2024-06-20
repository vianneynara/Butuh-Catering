<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold">{{ $product->name }}</h1>
    <p class="mt-2">{{ $product->description }}</p>
    <p class="mt-2 font-bold">{{ $product->price }}</p>
    <p class="mt-2">{{ $product->addr }}</p>
    <p class="mt-2">{{ $product->itemSold }} items sold</p>
</div>
</body>
</html>
