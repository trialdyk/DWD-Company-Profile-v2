@extends('layouts.app')

@section('content')
    <!-- Head -->
    <section class="bg-primary-black text-primary-silver h-[344px] py-[2.5rem] pl-[65px] w-full">
        <div class="grid grid-cols-2 gap-6">
            <div class="">
                <h1 class="mb-6 text-6xl w-[70%] font-bold">Product</h1>
                <h3 class="text-lg w-[70%]">We are specialized in designing kitchens, wardrobes, Walking closets,</h3>
            </div>
            <div class="relative">
                <div class="w-[14rem] h-[9rem]">
                    <img src="{{asset('assets/img/Ide Kerajinan Tangan Dari Kayu Bekas 5.jpg')}}" alt="" class="rounded-md h-full w-full">
                </div>
                <div class="absolute top-0 left-[16rem]">
                    <div class="w-[9rem] h-[9rem]">
                        <img src="{{asset('assets/img/Ide Kerajinan Tangan Dari Kayu Bekas 5.jpg')}}" alt="" class="rounded-md h-full w-full">
                    </div>
                </div>
                <div class="absolute top-[6rem] left-[6rem]">
                    <div class="w-[14rem] h-[9rem]">
                        <img src="{{asset('assets/img/20180312_171726-1-1024x768.jpg')}}" alt="" class="rounded-md h-full w-full">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Head -->

    <!-- Content -->
    <section class="px-[65px] my-[65px]">
        <h1 class="mb-6 text-6xl font-bold flex justify-center">Product</h1>
        <div class="grid grid-cols-2 gap-4">
            <div class="mt-[65px] flex">
                <div class="w-[12rem] h-[12rem]">
                    <img src="{{asset('assets/img/Group 64.png')}}" class="rounded-md" alt="">
                </div>
                <div class="w-[50%] my-3 ml-6">
                    <h1 class="font-bold mb-4">Motor Kayu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolor possimus magni maxime hic...
                    </p>
                    <button class="bg-[#D9D9D9] flex p-2 rounded-md my-3">
                        <p class="mr-4">Learn More</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mt-[65px] flex">
                <div class="w-[12rem] h-[12rem]">
                    <img src="{{asset('assets/img/Group 64.png')}}" class="rounded-md" alt="">
                </div>
                <div class="w-[50%] my-3 ml-6">
                    <h1 class="font-bold mb-4">Motor Kayu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolor possimus magni maxime hic...
                    </p>
                    <button class="bg-[#D9D9D9] flex p-2 rounded-md my-3">
                        <p class="mr-4">Learn More</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mt-[65px] flex">
                <div class="w-[12rem] h-[12rem]">
                    <img src="{{asset('assets/img/Group 64.png')}}" class="rounded-md" alt="">
                </div>
                <div class="w-[50%] my-3 ml-6">
                    <h1 class="font-bold mb-4">Motor Kayu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolor possimus magni maxime hic...
                    </p>
                    <button class="bg-[#D9D9D9] flex p-2 rounded-md my-3">
                        <p class="mr-4">Learn More</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mt-[65px] flex">
                <div class="w-[12rem] h-[12rem]">
                    <img src="{{asset('assets/img/Group 64.png')}}" class="rounded-md" alt="">
                </div>
                <div class="w-[50%] my-3 ml-6">
                    <h1 class="font-bold mb-4">Motor Kayu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolor possimus magni maxime hic...
                    </p>
                    <button class="bg-[#D9D9D9] flex p-2 rounded-md my-3">
                        <p class="mr-4">Learn More</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mt-[65px] flex">
                <div class="w-[12rem] h-[12rem]">
                    <img src="{{asset('assets/img/Group 64.png')}}" class="rounded-md" alt="">
                </div>
                <div class="w-[50%] my-3 ml-6">
                    <h1 class="font-bold mb-4">Motor Kayu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolor possimus magni maxime hic...
                    </p>
                    <button class="bg-[#D9D9D9] flex p-2 rounded-md my-3">
                        <p class="mr-4">Learn More</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mt-[65px] flex">
                <div class="w-[12rem] h-[12rem]">
                    <img src="{{asset('assets/img/Group 64.png')}}" class="rounded-md" alt="">
                </div>
                <div class="w-[50%] my-3 ml-6">
                    <h1 class="font-bold mb-4">Motor Kayu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolor possimus magni maxime hic...
                    </p>
                    <button class="bg-[#D9D9D9] flex p-2 rounded-md my-3">
                        <p class="mr-4">Learn More</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Content -->
@endsection
