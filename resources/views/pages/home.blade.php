@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div>
        @include('layouts.navbar')
        <div class="container p-12">
            <div class="grid grid-cols-2 my-4">
                <div class="">
                    <h1 class="text-4xl font-bold">Welcome To DWD Company</h1>
                    <div class="px-6 my-6 border-l-4 border-[#030303]">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 16 16">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="">
                    <img src="{{ asset('maxresdefault.jpg') }}" alt="" class="rounded-md" srcset="">
                </div>
            </div>
            <div class="my-12 flex flex-col">
                <h1 class="text-4xl font-bold mx-auto">DWD Company</h1>
                <div class="text-center w-[600px] mx-auto my-5">
                    <p>
                        DWD Consultancy is
                        a good choices being your partner to build and control your business which is under the auspices
                        of the legal entity PT. DWD Network Indonesia based on the Decree of the Minister of Law and
                        Human Rights of the Republic of Indonesia with Number: AHU-xxxxxx.
                    </p>
                    <div class="flex my-4 justify-center">
                        <p class="mr-4">Our Service</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="bg-[#030303] py-6 px-56">
                <h1 class="text-4xl font-bold flex justify-center text-[#E4E5E6]">FAQ</h1>
                <div class="text-[#E4E5E6]">
                    <div class="">
                        <h1>1. Website Ini Tentang Perusahaan Apa?</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
