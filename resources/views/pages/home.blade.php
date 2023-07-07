@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div>
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 p-4 md:p-12 my-4">
                <div class="">
                    <h1 class="text-2xl md:text-4xl font-bold">Welcome To DWD Company</h1>
                    <div
                        class="px-2 md:px-6 my-6 text-xs md:text-md lg:text-lg border-l-2 md:border-l-4 border-primary-black">
                        <p>
                            Welcome to our IT recruitment company! We are delighted to have you here and excited to help you
                            find
                            the best IT professionals for your business needs, whether you require junior or senior talent.
                            <br><br>
                            At our company, we pride ourselves on connecting businesses in The Netherlands and Indonesia
                            with exceptional IT professionals who possess the necessary skills, knowledge, and experience to
                            excel in their roles
                        </p>
                        <div class="flex my-4">
                            <p class="mr-4">Our Service</p>
                            <svg class="hidden md:block" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 16 16">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                            <svg class="md:hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 16 16">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="">
                    <img src="{{ asset('assets/img/maxresdefault.jpg') }}" alt="" class="rounded-md" srcset="">
                </div>
            </div>
            <div class="my-12 flex flex-col">
                <h1 class="text-3xl md:text-4xl font-bold mx-auto">DWD Company</h1>
                <div class="text-center w-full text-xs md:text-md lg:text-lg mx-2 my-2 md:my-5">
                    <p>
                        DWD Consultancy is
                        a good choices being your partner to build and control your business which is under the auspices
                        of the legal entity PT. DWD Network Indonesia based on the Decree of the Minister of Law and
                        Human Rights of the Republic of Indonesia with Number: AHU-xxxxxx.
                    </p>
                    <div class="flex my-4 justify-center">
                        <p class="mr-4">Our Service</p>
                        <svg class="hidden md:block" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                            viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                        <svg class="md:hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="corousel mb-8">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="{{ asset('assets/img/Group 64.png') }}" alt="" class="card-img">
                                    </div>
                                </div>

                                <div class="card-content">
                                    <h2 class="name">Kamera Kayu</h2>
                                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Molestiae vero?</p>
                                    <a class="button">View More</a>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="{{ asset('assets/img/Group 64.png') }}" alt="" class="card-img">
                                    </div>
                                </div>

                                <div class="card-content">
                                    <h2 class="name">Kamera Kayu</h2>
                                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Molestiae vero?</p>
                                    <a class="button">View More</a>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="{{ asset('assets/img/Group 64.png') }}" alt="" class="card-img">
                                    </div>
                                </div>

                                <div class="card-content">
                                    <h2 class="name">Kamera Kayu</h2>
                                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Molestiae vero?</p>
                                    <a class="button">View More</a>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="{{ asset('assets/img/Group 64.png') }}" alt="" class="card-img">
                                    </div>
                                </div>

                                <div class="card-content">
                                    <h2 class="name">Kamera Kayu</h2>
                                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Molestiae vero?</p>
                                    <a class="button">View More</a>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="{{ asset('assets/img/Group 64.png') }}" alt="" class="card-img">
                                    </div>
                                </div>

                                <div class="card-content">
                                    <h2 class="name">Kamera Kayu</h2>
                                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Molestiae vero?</p>
                                    <a class="button">View More</a>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="{{ asset('assets/img/Group 64.png') }}" alt="" class="card-img">
                                    </div>
                                </div>

                                <div class="card-content">
                                    <h2 class="name">Kamera Kayu</h2>
                                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Molestiae vero?</p>
                                    <a class="button">View More</a>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="{{ asset('assets/img/Group 64.png') }}" alt="" class="card-img">
                                    </div>
                                </div>

                                <div class="card-content">
                                    <h2 class="name">Kamera Kayu</h2>
                                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Molestiae vero?</p>
                                    <a class="button">View More</a>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="{{ asset('assets/img/Group 64.png') }}" alt="" class="card-img">
                                    </div>
                                </div>

                                <div class="card-content">
                                    <h2 class="name">Kamera Kayu</h2>
                                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Molestiae vero?</p>
                                    <a class="button">View More</a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-button-next swiper-navBtn"></div>
                        <div class="swiper-button-prev swiper-navBtn"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="bg-primary-black py-6 px-4 md:px-20 lg:px-36 my-5">
                <h1 class="text-4xl font-bold flex justify-center text-primary-silver">FAQ</h1>
                <div class="text-primary-silver my-7">
                    <div class="border-b-4 py-4 overflow-hidden border-primary-silver">
                        <div class="faq flex justify-between">
                            <h1 class="font-bold">1. Website Ini Tentang Perusahaan Apa?</h1>
                            <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M6.4 18L5 16.6L9.575 12L5 7.4L6.4 6l6 6l-6 6Zm6.6 0l-1.4-1.4l4.575-4.6L11.6 7.4L13 6l6 6l-6 6Z" />
                            </svg>
                        </div>
                        <div class="answer-faq">
                            <span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur voluptatibus ea unde,
                                enim doloribus culpa? Ducimus expedita et sequi vitae ad blanditiis illo! Exercitationem ab
                                iure voluptas qui quisquam aperiam aut alias, dolorum assumenda odio tempore aspernatur
                                maiores ipsum itaque? </span>
                        </div>
                    </div>
                    <div class="border-b-4 py-4 overflow-hidden border-primary-silver">
                        <div class="faq flex justify-between">
                            <h1 class="font-bold">2. Website Ini Tentang Perusahaan Apa?</h1>
                            <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M6.4 18L5 16.6L9.575 12L5 7.4L6.4 6l6 6l-6 6Zm6.6 0l-1.4-1.4l4.575-4.6L11.6 7.4L13 6l6 6l-6 6Z" />
                            </svg>
                        </div>
                        <div class="answer-faq">
                            <span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur voluptatibus ea unde,
                                enim doloribus culpa? Ducimus expedita et sequi vitae ad blanditiis illo! Exercitationem ab
                                iure voluptas qui quisquam aperiam aut alias, dolorum assumenda odio tempore aspernatur
                                maiores ipsum itaque? </span>
                        </div>
                    </div>
                    <div class="border-b-4 py-4 overflow-hidden border-primary-silver">
                        <div class="faq flex justify-between">
                            <h1 class="font-bold">3. Website Ini Tentang Perusahaan Apa?</h1>
                            <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M6.4 18L5 16.6L9.575 12L5 7.4L6.4 6l6 6l-6 6Zm6.6 0l-1.4-1.4l4.575-4.6L11.6 7.4L13 6l6 6l-6 6Z" />
                            </svg>
                        </div>
                        <div class="answer-faq">
                            <span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur voluptatibus ea unde,
                                enim doloribus culpa? Ducimus expedita et sequi vitae ad blanditiis illo! Exercitationem ab
                                iure voluptas qui quisquam aperiam aut alias, dolorum assumenda odio tempore aspernatur
                                maiores ipsum itaque? </span>
                        </div>
                    </div>
                </div>
                <div class="my-12">
                    <h1 class="text-primary-silver font-bold">Need More Help?</h1>
                    <button class="bg-primary-silver flex p-2 rounded-md mt-4">
                        <p class="mr-4">Contact Us</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/corousel/unpkg.com_swiper@8.1.6_swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/corousel/corousel.css') }}">
@endsection
@section('script')
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="{{ asset('assets/corousel/unpkg.com_swiper@8.1.6_swiper-bundle.min.js') }}"></script>
    <script>
        var swiper = new Swiper(".slide-content", {
            slidesPerView: 4,
            spaceBetween: 25,
            loop: true,
            centerSlide: 'true',
            fade: 'true',
            gragCursor: 'true',
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 4,
                },
            },
        });
    </script>
    <script>
        setInterval(function() {
            $('.swiper-button-next').click();
        }, 5000);
    </script>
@endsection
@section('style')
    <img src="{{asset('corousel.css')}}" alt="" srcset="">
@endsection
