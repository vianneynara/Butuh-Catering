@props(['title' => 'Title','price' => 'Rp 0','addr' => 'Indonesia','itemSold' => 0])

<div class="min-w-[140px] h-[190px] ml-4">
    <a href="/">
        <img src="https://placeholder.com/140x140" alt="" class="rounded-lg">
        <div class="ml-2">
            <p class="text-[11px]">{{ $title }}</p>
            <p class="text-[13px] m-0">{{ $price }}</p>
            <div class="flex gap-1.5 m-0">
                <p class="text-[8px] font-bold">{{ $addr }}</p>
                <p class="text-[8px] ">{{ $itemSold }} Terjual</p>
            </div>
        </div>
    </a>
</div>
