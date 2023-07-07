@extends('layouts.app')
@section('title','Contact')
@section('content')

    <!-- Head -->
    <section class="bg-primary-black text-primary-silver h-[344px] w-full flex justify-center items-center">
        <div class="text-center">
            <h1 class="mb-6 text-4xl md:text-5xl lg:text-6xl font-bold" >Contact Us</h1>
            <h3 class="text-md md:text-lg">We value every feedback from our customers. Do you have any suggestions, feedback or experiences you'd like to share</h3>
        </div>
    </section>
    <!--End Head -->
    <!-- Content -->
    <section class="my-16 px-[10px] md:px-[65px] w-full grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="col-span-1 rounded-lg h-[450px]">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.9521455746676!2d112.6043110737477!3d-7.9000686786053915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7881c2c4637501%3A0x10433eaf1fb2fb4c!2sHummasoft%20Technology!5e0!3m2!1sid!2sid!4v1687500641707!5m2!1sid!2sid" class="w-full h-full rounded-lg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="bg-primary-black col-span-1 flex justify-center items-center rounded-lg h-[450px]">
            <div class="p-8 h-full w-full">
                <input class="w-full bg-primary-silver p-2 mb-6 rounded-md" type="text" placeholder="Your Name">
                <input class="w-full bg-primary-silver p-2 mb-6 rounded-md" type="email" placeholder="Your Email">
                <textarea class="w-full bg-primary-silver p-2 mb-6 rounded-md" name="" id="" cols="30" rows="7" placeholder="Your Message"></textarea>
                <button class="px-6 py-2 bg-primary-silver rounded-md">Submit</button>
            </div>
        </div>
    </section>
    <!-- End Content -->

    <!-- Contact -->
    <section class="text-primary-silver grid mb-8 px-[10px] md:px-[65px] grid-cols-2 md:grid-cols-3 gap-4 md:gap-8">
        <div class="h-[140px] md:h-[200px] rounded-md flex-col bg-primary-black">
            <div class="w-12 h-12 md:h-20 px-1 md:w-20 mx-auto m-4 flex justify-center items-center rounded-full bg-primary-silver text-primary-black">
                <svg class="" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Z"/></svg>
            </div>
            <h6 class="text-center text-xs md:text-md">Jl. Brigjend Syafiudin No. 19 Kecamatan Sukorambi, Jember, Indonesia</h6>
        </div>
        <div class="h-[140px] md:h-[200px] rounded-md flex-col bg-primary-black">
            <div class="w-12 h-12 md:h-20 px-1 md:w-20 mx-auto m-4 flex justify-center items-center rounded-full bg-primary-silver text-primary-black">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62 10.79c1.44 2.83 3.76 5.15 6.59 6.59l2.2-2.2c.28-.28.67-.36 1.02-.25c1.12.37 2.32.57 3.57.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02l-2.2 2.2Z"/></svg>
            </div>
            <h6 class="text-center text-xs md:text-md">+6281249535754</h6>
        </div>
        <div class="h-[140px] md:h-[200px] rounded-md flex-col bg-primary-black">
            <div class="w-12 h-12 md:h-20 px-1 md:w-20 mx-auto m-4 flex justify-center items-center rounded-full bg-primary-silver text-primary-black">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6m-2 0l-8 5l-8-5h16m0 12H4V8l8 5l8-5v10Z"/></svg>
            </div>
            <h6 class="text-center text-xs md:text-md">dwdnetwork.id@gmail.com</h6>
        </div>
    </section>
    <!-- End Contact -->

    
@endsection