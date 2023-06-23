<div class="absolute top-0 bg-primary-black w-full h-[86px] flex justify-center items-center">
    <div class="h-[51px] w-full mx-[47px] flex justify-between items-center">
        <img class="h-full w-auto" src="{{asset('assets/img/Logo-Navbar.png')}}" alt="">
        <ul class="flex text-primary-silver gap-[20px]">
            <li class="{{request()->routeIs('home') ? 'active' : ''}}">
                <span>Home</span>
            </li>
            <li class="{{request()->routeIs('about') ? 'active' : ''}}">
                About
            </li>
            <li class="{{request()->routeIs('service') ? 'active' : ''}}">
                Service
            </li>
            <li class="{{request()->routeIs('expertise.*') ? 'active' : ''}}">
                Our Expertise
            </li>
            <li class="{{request()->routeIs('product') ? 'active' : ''}}">
                Product
            </li>
            <li class="{{request()->routeIs('contact') ? 'active' : ''}}">
                Contact
            </li>
        </ul>
        <div></div>
    </div>
</div>