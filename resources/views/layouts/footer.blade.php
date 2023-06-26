<!-- Footer -->
<section class="mt-28 w-full">
    <div class="w-full border-b-2 flex border-primary-black pb-3">
        <ul class="mx-auto flex gap-2 text-sm md:text-md lg:text-lg md:gap-6 text-primary-black">
            <li class="{{request()->routeIs('home') ? 'active' : ''}}">
                <a href="{{Route('home')}}">Home</a>
            </li>
            <li class="{{request()->routeIs('about') ? 'active' : ''}}">
                <a href="{{Route('about')}}">About</a>
            </li>
            <li class="{{request()->routeIs('service') ? 'active' : ''}}">
                <a href="{{Route('service')}}">Service</a>
            </li>
            <li class="{{request()->routeIs('expertise.*') ? 'active' : ''}}">
                <span class="submenu">Expertise</span>
            </li>
            <li class="{{request()->routeIs('product') || request()->routeIs('product.detail') ? 'active' : ''}}">
                <a href="{{Route('product')}}">Product</a>
            </li>
            <li class="{{request()->routeIs('contact') ? 'active' : ''}}">
                <a href="{{Route('contact')}}">Contact</a>
            </li>
        </ul>
    </div>
    <div class="flex mt-6 mb-3 justify-center">
        <h1 class="text-sm md:text-lg lg:text-xl">Copyright © 2023 - DWD Company. All rights reserved.</h1>
    </div>
</section>
<!-- End Footer -->