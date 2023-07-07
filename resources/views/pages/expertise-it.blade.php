@extends('layouts.app')

@section('content')
    <!-- Head -->
    <section class="bg-[url('/assets/img/Group 108.png')] text-primary-silver h-[344px] py-[2.5rem] w-full"
        style="background-image: url('/assets/img/Group 108.png')">
        <h1 class="mb-6 text-6xl font-bold flex justify-center">Expertise Wood</h1>
        <p class="flex justify-center text-center px-[15%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis
            consectetur sint quis impedit eum ad, consequatur minus blanditiis adipisci vitae, dolor, totam pariatur nostrum
            numquam. Omnis aliquam tempore quasi facilis totam dicta accusamus exercitationem, reprehenderit aliquid autem
            sit aut consectetur quo repudiandae praesentium dolore magnam quibusdam aperiam adipisci nihil. Voluptatibus,
            officiis, sunt impedit incidunt ad amet esse, architecto culpa accusamus non porro doloremque expedita ipsum!
            Facere tempore commodi magnam possimus.</p>
    </section>
    <!--End Head -->

    <!-- Content -->
    <section class="px-[65px] my-[65px]">
        <div class="my-4">
            <div class="grid grid-cols-3">
                <div class="relative col-span-1">
                    <div class="w-[16rem] h-[10rem] absolute top-[7rem]">
                        <img src="{{ asset('assets/img/Ide Kerajinan Tangan Dari Kayu Bekas 5.jpg') }}" alt=""
                            class="rounded-md h-full w-full">
                    </div>
                    <div class="img">
                        <div class="w-[16rem] h-[10rem] mb-4 ml-[6rem]">
                            <img src="{{ asset('assets/img/20180312_171726-1-1024x768.jpg') }}" alt=""
                                class="rounded-md h-full w-full">
                        </div>
                        <div class="w-[16rem] h-[10rem] mt-4 ml-[6rem]">
                            <img src="{{ asset('assets/img/20180312_171726-1-1024x768.jpg') }}" alt=""
                                class="rounded-md h-full w-full">
                        </div>
                    </div>

                </div>
                <div class="col-span-2">
                    <h1 class="text-6xl font-bold flex justify-start text-primary-black"><u>Our Expertise</u></h1>
                    <p class="text-primary-black my-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente
                        eos ad in dolore voluptatibus, exercitationem cupiditate. Repellat neque, nostrum modi asperiores
                        deserunt eius veritatis aperiam reprehenderit, necessitatibus esse dolorem? Illo reprehenderit,
                        laborum commodi eveniet alias quibusdam quas quidem est non optio aperiam cupiditate molestiae nulla
                        quisquam mollitia sequi id quae dolorum ipsam deserunt unde beatae dolorem! Optio, molestias soluta.
                        Architecto accusantium quam, sequi perferendis molestiae earum consectetur alias delectus omnis nam
                        voluptas quod voluptatibus, mollitia vel. Earum, deleniti veritatis, aperiam cupiditate, fugit quia
                        nulla ullam voluptatum ut quaerat eligendi neque!</p>
                </div>
            </div>
        </div>
        <div class="my-4">
            <div class="grid grid-cols-3 my-8">
                <div class="col-span-2">
                    <h1 class="text-6xl font-bold flex justify-end text-primary-black"><u>Our Expertise</u></h1>
                    <p class="text-primary-black my-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente
                        eos ad in dolore voluptatibus, exercitationem cupiditate. Repellat neque, nostrum modi asperiores
                        deserunt eius veritatis aperiam reprehenderit, necessitatibus esse dolorem? Illo reprehenderit,
                        laborum commodi eveniet alias quibusdam quas quidem est non optio aperiam cupiditate molestiae nulla
                        quisquam mollitia sequi id quae dolorum ipsam deserunt unde beatae dolorem! Optio, molestias soluta.
                        Architecto accusantium quam, sequi perferendis molestiae earum consectetur alias delectus omnis nam
                        voluptas quod voluptatibus, mollitia vel. Earum, deleniti veritatis, aperiam cupiditate, fugit quia
                        nulla ullam voluptatum ut quaerat eligendi neque!</p>
                </div>
                <div class="relative col-span-1 mx-12 my-3">
                    <div class="w-[10rem] h-[7rem] absolute top-[7rem] left-[11rem]">
                        <img src="{{ asset('assets/img/Ide Kerajinan Tangan Dari Kayu Bekas 5.jpg') }}" alt=""
                            class="rounded-md h-full w-full">
                    </div>
                    <div class="img">
                        <div class="w-[16rem] h-[10rem]">
                            <img src="{{ asset('assets/img/20180312_171726-1-1024x768.jpg') }}" alt=""
                                class="rounded-md h-full w-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-4">
            <h1 class="mb-6 text-6xl font-bold flex justify-center">Our Product</h1>
            <p class="font-bold flex justify-end mr-[65px]">Show All ></p>
            <div class="grid grid-cols-2">
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
        </div>
        <div class="my-[4rem]">
            <h1 class="mb-[4rem] text-6xl font-bold flex justify-center">Our Team</h1>
            <div class="grid grid-cols-4 gap-10">
                <div class="border-2 border-[#262626] p-6 rounded-md">
                    <img src="{{asset('assets/img/jpg_20230615_214517_0000 (2).jpg')}}" class="rounded-md" alt="">
                    <h1 class="flex justify-center font-bold text-center text-xl my-4">Daniel William Daud</h1>
                    <h1 class="flex justify-center text-center my-4 italic">It Consultan</h1>
                </div>
                <div class="border-2 border-[#262626] p-6 rounded-md">
                    <img src="{{asset('assets/img/jpg_20230615_214517_0000 (2).jpg')}}" class="rounded-md" alt="">
                    <h1 class="flex justify-center font-bold text-center text-xl my-4">Daniel William Daud</h1>
                    <h1 class="flex justify-center text-center my-4 italic">It Consultan</h1>
                </div>
                <div class="border-2 border-[#262626] p-6 rounded-md">
                    <img src="{{asset('assets/img/jpg_20230615_214517_0000 (2).jpg')}}" class="rounded-md" alt="">
                    <h1 class="flex justify-center font-bold text-center text-xl my-4">Daniel William Daud</h1>
                    <h1 class="flex justify-center text-center my-4 italic">It Consultan</h1>
                </div>
                <div class="border-2 border-[#262626] p-6 rounded-md">
                    <img src="{{asset('assets/img/jpg_20230615_214517_0000 (2).jpg')}}" class="rounded-md" alt="">
                    <h1 class="flex justify-center font-bold text-center text-xl my-4">Daniel William Daud</h1>
                    <h1 class="flex justify-center text-center my-4 italic">It Consultan</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Content -->
@endsection
