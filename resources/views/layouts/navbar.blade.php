<div class="sticky top-0 bg-primary-black w-full h-[86px] flex justify-center items-center" style="z-index: 999">
    <div class="h-[51px] w-full mx-[47px] flex justify-between items-center">
        <img class="h-full w-auto" src="{{asset('assets/img/Logo-Navbar.png')}}" alt="">
        <ul class="flex text-primary-silver gap-[20px]">
            <li class="{{request()->routeIs('home') ? 'active' : ''}}">
                <a href="{{Route('home')}}">Home</a>
            </li>
            <li class="{{request()->routeIs('about') ? 'active' : ''}}">
                <a href="{{Route('about')}}">About</a>
            </li>
            <li class="{{request()->routeIs('service') ? 'active' : ''}}">
                <a href="{{Route('service')}}">Service</a>
            </li>
            <li class="relative {{request()->routeIs('expertise.*') ? 'active' : ''}} ">
                <div class="flex submenu-link justify-between">
                    <a>Expertise </a>
                    <a ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6l1.41-1.42Z"/></svg></a>
                </div>
                <div class="submenu bg-white w-36 text-primary-black absolute top-6 rounded-md">
                    <ul>
                        <li>
                            <a class="px-1 py-2" href="{{Route('expertise.wood')}}">Wood Division</a>
                        </li>
                        <li>
                            <a class="px-1 py-2" href="{{Route('expertise.it')}}">IT Division</a>
                        </li>
                    </ul>

                </div>
            </li>
            <li class="{{request()->routeIs('product') || request()->routeIs('product.detail') ? 'active' : ''}}">
                <a href="{{Route('product')}}">Product</a>
            </li>
            <li class="{{request()->routeIs('contact') ? 'active' : ''}}">
                <a href="{{Route('contact')}}">Contact</a>
            </li>
        </ul>
        <div></div>
    </div>
</div>