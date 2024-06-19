<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tailwind</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#F4F4F4] flex flex-col items-center box-sizing-border">

<div class="w-full">
    <!-- Top Bar -->
    <div class="flex flex-col">
        <div class="bg-[#FFFAF2] flex flex-row justify-between p-2 w-full">
            <span class="ml-2 font-['Roboto'] font-medium text-[12px] text-[#000000]">11:07</span>
            <div class="flex flex-row items-center space-x-1">
                <img class="w-4 h-3" src="../assets/vectors/vector_249_x2.svg" />
                <img class="w-3 h-3" src="../assets/vectors/vector_143_x2.svg" />
                <img class="w-1.5 h-3" src="../assets/vectors/vector_219_x2.svg" />
            </div>
        </div>
        <div class="bg-[#FFFAF2] flex flex-row justify-between p-4 w-full">
            <img class="w-5 h-4" src="../assets/vectors/vector_95_x2.svg" />
            <span class="font-['Roboto'] font-bold text-[16px] text-[#D4AE67]">Buat Akun</span>
            <div></div>
        </div>
    </div>

    <!-- Register Form -->
    <div class="shadow-md rounded-[5px] bg-white m-4 p-4 w-[calc(100%_-_20px)] box-sizing-border">
        <div class="flex flex-col items-center w-full">
            <!-- Register Form -->
            <form class="w-full" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="relative w-full mb-6">
                    <span class="absolute left-3 top-[-6px] bg-white px-1 font-['Roboto'] font-normal text-[10px] text-[#CDCDCD]">Nama</span>
                    <div class="rounded-[3px] border border-[#CDCDCD] bg-white flex flex-row justify-between p-2 mt-4 w-full">
                        <input class="outline-none flex-grow text-gray-700" type="text" name="name" id="name" required>
                    </div>
                </div>

                <div class="relative w-full mb-6">
                    <span class="absolute left-3 top-[-6px] bg-white px-1 font-['Roboto'] font-normal text-[10px] text-[#CDCDCD]">Email</span>
                    <div class="rounded-[3px] border border-[#CDCDCD] bg-white flex flex-row justify-between p-2 mt-4 w-full">
                        <input class="outline-none flex-grow text-gray-700" type="email" name="email" id="email" required>
                    </div>
                </div>

                <div class="relative w-full mb-6">
                    <span class="absolute left-3 top-[-6px] bg-white px-1 font-['Roboto'] font-normal text-[10px] text-[#CDCDCD]">Password</span>
                    <div class="rounded-[3px] border border-[#CDCDCD] bg-white flex flex-row justify-between p-2 mt-4 w-full">
                        <input class="outline-none flex-grow text-gray-700" type="password" name="password" id="password" required>
                    </div>
                </div>

                <!-- Register Button -->
                <button type="submit" id="registerButton" class="bg-[#CDCDCD] text-white font-['Roboto'] font-bold text-[16px] w-full py-2 rounded-[10px] mb-6">Buat Akun</button>
            </form>

            <!-- Separator -->
            <div class="text-[#CDCDCD] font-['Roboto'] font-bold text-[12px] mb-4">Atau</div>

            <!-- Social Register and Login Buttons -->
            <div class="flex flex-row justify-between w-full">
                <div class="border border-[#D4AE67] rounded-[10px] flex justify-center items-center p-2 w-[calc(50%-10px)]">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                        <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
                        <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
                        <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
                        <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                    </svg>
                </div>
                <a href="{{ route('login') }}" class="border border-[#D4AE67] text-[#D4AE67] font-['Roboto'] font-bold text-[16px] rounded-[10px] flex justify-center items-center w-[calc(50%-10px)] p-2">
                    Masuk Akun
                </a>
            </div>
        </div>
    </div>

    <!-- Version Information -->
    <span class="font-['Roboto'] font-normal text-[9px] text-[#CDCDCD]">version 0.1.0 alpha</span>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const registerButton = document.getElementById('registerButton');

        function checkInputs() {
            if (nameInput.value.trim() !== '' && emailInput.value.trim() !== '' && passwordInput.value.trim() !== '') {
                registerButton.classList.remove('bg-[#CDCDCD]');
                registerButton.classList.add('bg-yellow-800');
            } else {
                registerButton.classList.remove('bg-yellow-800');
                registerButton.classList.add('bg-[#CDCDCD]');
            }
        }

        nameInput.addEventListener('input', checkInputs);
        emailInput.addEventListener('input', checkInputs);
        passwordInput.addEventListener('input', checkInputs);
    });
</script>

</body>
</html>
