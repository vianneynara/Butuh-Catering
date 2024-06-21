@props(['index' => 0])

<div>
    <div class="flex h-[60px] items-center mt-1 shadow-md">
        <div class="form-control">
            <label class="label cursor-pointer">
                <input type="checkbox" checked="checked" class="checkbox"/>
            </label>
        </div>
        <div class="w-full flex items-center justify-between">
            <div class="flex gap-2 h-full">
                <img class="w-[45px] h-[45px] rounded-md" src="https://placeholder.com/45x45">
                <div class="w-64 flex flex-col items-start my-0">
                    <p class="text-[13px]">Kuenya WZ</p>
                    <p class="text-[10px]">Paingan, Yogyakarta asijdoi aidj aoisjd ioasjdo</p>
                </div>
            </div>
            <div class="flex gap-[10px] mr-2">
                <img class="h-[30px] w-[30px] rounded-md" src="https://placeholder.com/30x30" alt="">
                <img class="h-[30px] w-[30px] rounded-md" src="https://placeholder.com/30x30" alt="">
                <button id="arrow" class="arrow cursor-pointer">
                    <img class="h-[30px] w-[30px] rounded-md" src="https://placeholder.com/30x30" alt="">
                </button>
            </div>
        </div>
    </div>
    <div id="cart-container" class="cart-container grid grid-rows-[0] transition-[grid-template-rows] duration-[0.5s]
     ease-[ease-out] overflow-hidden">
        <div class="flex flex-col gap-3 align-center m-auto py-3">
            <x-cart-item></x-cart-item>
            <x-cart-item></x-cart-item>
            <x-cart-item></x-cart-item>
        </div>
    </div>
</div>
<script>
    const arrowId = document.querySelector('#arrow')
    let isClicked = true;

    const arrowIdEvent = arrowId.addEventListener('click', () => openHandler())

    function openHandler() {
        const contentId = document.getElementById('cart-container')
        isClicked ? contentId.style.gridTemplateRows = '1fr' : contentId.style.gridTemplateRows = '0'
        isClicked = !isClicked
    }
</script>
