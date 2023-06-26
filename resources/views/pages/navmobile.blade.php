<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="">
    <div class="bg-primary-black min-h-screen transition-all duration-1000 w-full h-full absolute z-30 top-0" id="mobile-navbar">
        <div class="" id="">
            <div class="w-full h-full lg:px-[200px] py-24">
                <div class="flex flex-col">
                    <div class="flex items-center justify-between">
                        <div class=""></div>
                        <div class="">
                            <img src="{{asset('assets/img/3.png')}}" alt="Logo" width="60" class="rounded-full ml-[30px]" style="margin-left: 30px" height="60">
                        </div>
                        <div class="">
                            <button id="close-navbar">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="text-white"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="my-2 mx-auto">
                            <a href="/" class="px-3 py-2 rounded-md text-2xl tracking-wide text-white">Home</a>
                        </div>
                        <div class="my-2 mx-auto">
                            <a href="/about" class="px-3 py-2 rounded-md text-2xl tracking-wide text-white">About</a>
                        </div>
                        <div class="my-2 mx-auto">
                            <a href="/service" class="px-3 py-2 rounded-md text-2xl tracking-wide text-white">Service</a>
                        </div>
                        <div class="my-2 mx-auto">
                            <a href="/team" class="px-3 py-2 rounded-md text-2xl tracking-wide text-white">Team</a>
                        </div>
                        <div class="my-2 mx-auto">
                            <a href="/contact" class="px-3 py-2 rounded-md text-2xl tracking-wide text-white">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            <footer data-aos="fade-up" class="py-3 m-3 border-gray flex flex-col text-white">
                <p class="mx-auto text-center">Copyright © 2023 - Casa Italia Global. All rights reserved.</p>
                <p class="mx-auto">Developed by <b>Afillix</b></p>
            </footer>
        </div>
    </div>
</body>
</html>