@extends('layouts.app')
@section('title','Product')
@section('content')
    <!-- Head -->
    <section class="bg-primary-black text-primary-silver min-h-[344px] py-[2.5rem] px-[15px] md:pl-[65px] w-full">
        <div class="grid grid-flow-col-1 md:grid-cols-2 md:gap-3 lg:gap-6">
            <div class="" data-aos="fade-right" data-aos-duration="800" data-aos-delay="500">
                <h1 class="mb-6 text-3xl text-center md:text-left md:text-4xl lg:text-6xl md:w-[70%] font-bold">Product</h1>
                <h3 class="text-md text-center md:text-left mb-2 lg:text-lg md:w-[70%]">We are specialized in designing kitchens, wardrobes, Walking closets,</h3>
            </div>
            <div class="relative md:pr-8" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
                <div class="w-[10rem] h-[7rem] lg:w-[14rem] lg:h-[9rem]">
                    <img src="{{asset('assets/img/Ide Kerajinan Tangan Dari Kayu Bekas 5.jpg')}}" alt="" class="rounded-md h-full w-full">
                </div>
                <div class="absolute top-0 left-[12rem] lg:left-[16rem]">
                    <div class="w-[10rem] h-[7rem] lg:w-[14rem] lg:h-[9rem]">
                        <img src="{{asset('assets/img/Ide Kerajinan Tangan Dari Kayu Bekas 5.jpg')}}" alt="" class="rounded-md h-full w-full">
                    </div>
                </div>
                <div class="absolute top-[3rem] md:top-[5rem] lg:top-[6rem] left-[5rem] lg:left-[6rem]">
                    <div class="w-[10rem] h-[7rem] lg:w-[14rem] lg:h-[9rem]">
                        <img src="{{asset('assets/img/20180312_171726-1-1024x768.jpg')}}" alt="" class="rounded-md h-full w-full">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Head -->

    <!-- Content -->
    <section class="px-[10px] md:px-[40px] lg:px-[65px] my-[20px] md:my-[40px] lg:my-[65px]">
        <h1 data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" class="mb-6 text-4xl md:text-5xl lg:text-6xl font-bold flex justify-center">Product</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-4">
            <div class="mt-[20px] md:mt-[30px] lg:mt-[65px] flex"  data-aos="fade-right" data-aos-duration="800" data-aos-delay="500">
                <div class="w-[12rem] h-[12rem]">
                    <img src="{{asset('assets/img/Group 64.png')}}" class="rounded-md" alt="">
                </div>
                <div class="w-[50%] my-1 lg:my-3 ml-2 lg:ml-6">
                    <h1 class="font-bold mb-4">Motor Kayu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolor possimus magni...
                    </p>
                    <button class="bg-[#D9D9D9] flex p-1 lg:p-2 rounded-md my-[1] lg:my-3">
                        <p class="mr-2 lg:mr-4">Learn More</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-duration="800" data-aos-delay="500" class="mt-[20px] md:mt-[30px] lg:mt-[65px] flex">
                <div class="w-[12rem] h-[12rem]">
                    <img src="{{asset('assets/img/Group 64.png')}}" class="rounded-md" alt="">
                </div>
                <div class="w-[50%] my-1 lg:my-3 ml-2 lg:ml-6">
                    <h1 class="font-bold mb-4">Motor Kayu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolor possimus magni...
                    </p>
                    <button class="bg-[#D9D9D9] flex p-1 lg:p-2 rounded-md my-[1] lg:my-3">
                        <p class="mr-2 lg:mr-4">Learn More</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mt-[20px] md:mt-[30px] lg:mt-[65px] flex"  data-aos="fade-right" data-aos-duration="800" data-aos-delay="500">
                <div class="w-[12rem] h-[12rem]">
                    <img src="{{asset('assets/img/Group 64.png')}}" class="rounded-md" alt="">
                </div>
                <div class="w-[50%] my-1 lg:my-3 ml-2 lg:ml-6">
                    <h1 class="font-bold mb-4">Motor Kayu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolor possimus magni...
                    </p>
                    <button class="bg-[#D9D9D9] flex p-1 lg:p-2 rounded-md my-[1] lg:my-3">
                        <p class="mr-2 lg:mr-4">Learn More</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-duration="800" data-aos-delay="500" class="mt-[20px] md:mt-[30px] lg:mt-[65px] flex">
                <div class="w-[12rem] h-[12rem]">
                    <img src="{{asset('assets/img/Group 64.png')}}" class="rounded-md" alt="">
                </div>
                <div class="w-[50%] my-1 lg:my-3 ml-2 lg:ml-6">
                    <h1 class="font-bold mb-4">Motor Kayu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolor possimus magni...
                    </p>
                    <button class="bg-[#D9D9D9] flex p-1 lg:p-2 rounded-md my-[1] lg:my-3">
                        <p class="mr-2 lg:mr-4">Learn More</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mt-[20px] md:mt-[30px] lg:mt-[65px] flex"  data-aos="fade-right" data-aos-duration="800" data-aos-delay="500">
                <div class="w-[12rem] h-[12rem]">
                    <img src="{{asset('assets/img/Group 64.png')}}" class="rounded-md" alt="">
                </div>
                <div class="w-[50%] my-1 lg:my-3 ml-2 lg:ml-6">
                    <h1 class="font-bold mb-4">Motor Kayu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolor possimus magni...
                    </p>
                    <button class="bg-[#D9D9D9] flex p-1 lg:p-2 rounded-md my-[1] lg:my-3">
                        <p class="mr-2 lg:mr-4">Learn More</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-duration="800" data-aos-delay="500" class="mt-[20px] md:mt-[30px] lg:mt-[65px] flex">
                <div class="w-[12rem] h-[12rem]">
                    <img src="{{asset('assets/img/Group 64.png')}}" class="rounded-md" alt="">
                </div>
                <div class="w-[50%] my-1 lg:my-3 ml-2 lg:ml-6">
                    <h1 class="font-bold mb-4">Motor Kayu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolor possimus magni...
                    </p>
                    <button class="bg-[#D9D9D9] flex p-1 lg:p-2 rounded-md my-[1] lg:my-3">
                        <p class="mr-2 lg:mr-4">Learn More</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16">
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
