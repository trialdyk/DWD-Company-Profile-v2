@extends('layouts.app')
@section('title', 'Product')
@section('content')
        <div class="w-full p-12">
            <div class="my-3 flex flex-col">
                <img src="{{asset('assets/img/1-kusima-dompet-kayu-wooden-wallet-infeed-copied.jpg')}}" alt=""
                    class="w-[70rem] h-[10rem] md:h-[30rem] rounded-md mx-auto"
                    srcset="">
                <div class="">
                    <h1 class="text-primary-black font-bold text-4xl flex my-12 justify-center">Motor Kayu</h1>
                    <p class="text-center text-primary-black md:text-lg">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis debitis magni earum ipsa
                        consequatur beatae provident culpa dolorem consequuntur, labore, architecto numquam quam ea, ut iste
                        omnis adipisci officia nulla sapiente! Sint quas blanditiis ea aperiam architecto fugit nemo
                        delectus, nobis porro inventore cupiditate cum, deserunt impedit a, nihil harum!Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Suscipit provident autem expedita quibusdam animi sint nisi
                        quod aliquid consectetur natus. Laboriosam beatae, voluptate dolor ea placeat numquam quo in totam
                        tenetur doloribus quisquam ab dolore. Expedita repudiandae amet culpa aliquam omnis. Sit
                        voluptatibus magnam voluptatum deleniti neque praesentium suscipit repellendus.
                    </p>
                </div>
            </div>
            <div class="my-3 flex flex-col">
                <h1 class="text-primary-black font-bold text-2xl md:text-4xl flex my-12 justify-center text-center md:text-left">Produk Lainnya</h1>
                <div class="grid grid-cols-1 md:grid-cols-3 mx-auto gap-12">
                    <div class="flex flex-col">
                        <img src="{{asset('assets/img/Group 64.png')}}" alt="" class="w-[200px] h-[200px] rounded-md" srcset="">
                        <h1 class="text-primary-black font-bold text-lg mx-auto text-center my-3">Kamera Kayu</h1>
                        <p class="text-primary-black w-[200px] md:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing...</p>
                    </div>
                    <div class="flex flex-col">
                        <img src="{{asset('assets/img/Group 64.png')}}" alt="" class="w-[200px] h-[200px] rounded-md" srcset="">
                        <h1 class="text-primary-black font-bold text-lg mx-auto text-center my-3">Kamera Kayu</h1>
                        <p class="text-primary-black w-[200px] md:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing...</p>
                    </div>
                    <div class="flex flex-col">
                        <img src="{{asset('assets/img/Group 64.png')}}" alt="" class="w-[200px] h-[200px] rounded-md" srcset="">
                        <h1 class="text-primary-black font-bold text-lg mx-auto text-center my-3">Kamera Kayu</h1>
                        <p class="text-primary-black w-[200px] md:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing...</p>
                    </div>

                </div>
            </div>
        </div>
@endsection
