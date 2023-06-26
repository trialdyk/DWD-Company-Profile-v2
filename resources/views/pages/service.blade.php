@extends('layouts.app')

@section('content')
    <!-- Head -->
    <section class="bg-primary-black text-primary-silver h-[344px] py-[2.5rem] px-[20px] md:px-[65px] w-full">
        <div class="grid lg:grid-cols-2 lg:gap-6">
            <div class="">
                <h1 class="mb-6 text-center lg:text-left text-4xl md:text-5xl lg:text-6xl "><span class="italic">Wide</span><span class="font-bold"> range </span><span
                        class="italic">of services for you</span></h1>
                <h3 class="text-center lg:text-left text-sm md:text-md lg:text-lg">We are specialized in designing kitchens, wardrobes, Walking closets, indoor and outdoor
                    furniture and etc. We are here to help you to use your space in maximum, and will offer you the ideal
                    design which will fit your budget.</h3>
            </div>
        </div>
    </section>
    <!--End Head -->

    <!-- Content -->
    <section class="px-[65px] my-[65px]">
        <div class="grid grid-cols-2 gap-36">
            <div class="">
                <div class="relative z-1">
                    <div class="bg-black text-white rounded-md shadow-primary-black shadow-lg w-[16rem] h-[23rem]">
                        <img src="{{asset('assets/img/pngtree-large-amount-of-wood-is-stacked-in-a-wooden-shop-picture-image_2624305.png')}}"
                            class="w-full h-full rounded-md" alt="">
                    </div>
                    <div class="absolute top-44 left-32">
                        <div class="bg-black text-white rounded-md shadow-primary-black shadow-lg w-[16rem] h-[23rem]">
                            <img src="{{asset('assets/img/desktop-wallpaper-of-the-week-textured-wood-texture.jpg')}}"
                                class="w-full h-full rounded-md" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-[2rem]">
                <h1 class="text-6xl font-bold my-6">Wood Company</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio repellat consectetur similique illo? Ex
                    culpa eius, omnis cum excepturi esse?
                    <br><br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae in animi perferendis natus! Quisquam
                    minus, eligendi officia repellat pariatur praesentium?
                    <br><br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae in animi perferendis natus! Quisquam
                    minus, eligendi officia repellat pariatur praesentium?
                </p>
                <button class="bg-[#D9D9D9] flex p-2 rounded-md mt-12">
                    <p class="mr-4">Learn More</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 16 16">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-36 mt-[12rem]">
            <div class="mt-[2rem]">
                <h1 class="text-6xl font-bold my-6">It Devision</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio repellat consectetur similique illo? Ex
                    culpa eius, omnis cum excepturi esse?
                    <br><br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae in animi perferendis natus! Quisquam
                    minus, eligendi officia repellat pariatur praesentium?
                    <br><br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae in animi perferendis natus! Quisquam
                    minus, eligendi officia repellat pariatur praesentium?
                </p>
                <button class="bg-[#D9D9D9] flex p-2 rounded-md mt-12">
                    <p class="mr-4">Learn More</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 16 16">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </button>
            </div>
            <div class="">
                <div class="relative">
                    <div class="bg-black text-white rounded-md shadow-primary-black shadow-lg w-[16rem] h-[23rem]">
                        <img src="{{asset('assets/img/pngtree-large-amount-of-wood-is-stacked-in-a-wooden-shop-picture-image_2624305.png')}}"
                            class="w-full h-full rounded-md" alt="">
                    </div>
                    <div class="absolute top-44 left-32">
                        <div class="bg-black text-white rounded-md shadow-primary-black shadow-lg w-[16rem] h-[23rem]">
                            <img src="{{asset('assets/img/desktop-wallpaper-of-the-week-textured-wood-texture.jpg')}}"
                                class="w-full h-full rounded-md" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Content -->
@endsection
