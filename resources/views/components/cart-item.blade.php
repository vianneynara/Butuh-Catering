<div class="flex h-[70px] w-[480px] border border-solid items-center rounded-md">
    <div class="form-control">
        <label class="label cursor-pointer">
            <input type="checkbox" checked="checked" class="checkbox"/>
        </label>
    </div>
    <div class="w-full flex items-center justify-between">
        <div class="flex gap-2 h-full">
            <img class="w-[65px] h-[65px]" src="https://placeholder.com/65x65">
            <div class="w-56 flex flex-col items-start my-0">
                <p class="text-[13px]">Sosis Solo</p>
                <p class="text-[11px]">Rp 3.000</p>
                <div>
                    <div class="custom-number-input h-[25px] w-[60px]">
                        <div class="flex flex-row h-[23px] w-full rounded-lg relative bg-transparent mt-1">
                            <button data-action="decrement"
                                    class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full
                                    w-10 rounded-l cursor-pointer outline-none">
                                <span class="m-auto text-[17px] font-thin">−</span>
                            </button>
                            <input type="number"
                                   class="outline-none focus:outline-none text-center w-full bg-gray-300
                                   font-semibold text-[13px] hover:text-black focus:text-black
                                   md:text-basecursor-default flex items-center text-gray-700  outline-none"
                                   name="custom-input-number" value="0"></input>
                            <button data-action="increment"
                                    class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-10 rounded-r
                    cursor-pointer">
                                <span class="m-auto text-[17px] font-thin">+</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center gap-[10px] mr-2">
            <img class="h-[30px] w-[30px]" src="https://placeholder.com/30x30" alt="">
            <img class="h-[30px] w-[30px]" src="https://placeholder.com/30x30" alt="">
        </div>
    </div>
</div>

<style>
    input[type='number']::-webkit-inner-spin-button,
    input[type='number']::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .custom-number-input input:focus {
        outline: none !important;
    }

    .custom-number-input button:focus {
        outline: none !important;
    }
</style>

<script>
    function decrement(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value--;
        target.value = value;
    }

    function increment(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="increment"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value++;
        target.value = value;
    }

    const decrementButtons = document.querySelectorAll(
        `button[data-action="decrement"]`
    );

    const incrementButtons = document.querySelectorAll(
        `button[data-action="increment"]`
    );

    decrementButtons.forEach(btn => {
        btn.addEventListener("click", decrement);
    });

    incrementButtons.forEach(btn => {
        btn.addEventListener("click", increment);
    });
</script>
