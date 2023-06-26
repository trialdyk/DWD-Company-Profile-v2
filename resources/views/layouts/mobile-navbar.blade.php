<div id="mobile-navbar" class="mobile-navbar-close bg-primary-black overflow-hidden min-h-screen transition-all duration-1000 w-full h-full absolute z-30 top-0">
    <div class="h-full flex flex-col" id="">
        <div class="w-full h-full lg:px-[200px] pt-8">
            <div class="flex h-full flex-col">
                <div class="flex items-center justify-between">
                    <div class="">
                        <img src="{{asset('assets/img/3.png')}}" alt="Logo" width="60" class="rounded-full ml-[30px]" style="margin-left: 30px" height="60">
                    </div>
                    <div class="mr-6">
                        <button id="close-mobile-navbar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="text-white"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex my-auto flex-col mt-8 items-center text-primary-silver">
                    <div class="my-3 mx-auto ">
                        <a href="{{Route('home')}}" class="px-3 py-2 rounded-md text-2xl tracking-wide">Home</a>
                    </div>
                    <div class="my-3 mx-auto ">
                        <a href="{{Route('about')}}" class="px-3 py-2 rounded-md text-2xl tracking-wide">About</a>
                    </div>
                    <div class="my-3 mx-auto ">
                        <a href="{{Route('service')}}" class="px-3 py-2 rounded-md text-2xl tracking-wide">Service</a>
                    </div>
                    <div class="my-3 mx-auto ">
                        <a href="{{Route('expertise.wood')}}" class="px-3 py-2 rounded-md text-2xl tracking-wide">Expertise Wood</a>
                    </div>
                    <div class="my-3 mx-auto ">
                        <a href="{{Route('expertise.it')}}" class="px-3 py-2 rounded-md text-2xl tracking-wide">Expertise IT</a>
                    </div>
                    <div class="my-3 mx-auto ">
                        <a href="{{Route('contact')}}" class="px-3 py-2 rounded-md text-2xl tracking-wide">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <footer data-aos="fade-up" class="py-3 m-3 border-gray mt-auto flex flex-col text-primary-silver">
            <p class="mx-auto text-center">Copyright © 2023 - Casa Italia Global. All rights reserved.</p>
            <p class="mx-auto">Developed by <b>Afillix</b></p>
        </footer>
    </div>
</div>