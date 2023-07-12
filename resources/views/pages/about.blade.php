@extends('layouts.app')
@section('title', 'About')
@section('content')
        <div class="w-full p-12 pb-0">
            <div class="grid grid-cols-2 my-4">
                <div class="" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('assets/img/maxresdefault.jpg') }}" alt="" class="rounded-md" srcset="">
                </div>
                <div class="ml-[2rem]">
                    <h1 data-aos="fade-left" data-aos-duration="500" data-aos-delay="1200" class="text-2xl text-[#A6A3A3] font-bold">About Us</h1>
                    <h1 data-aos="fade-left" data-aos-duration="500" data-aos-delay="1600" class="text-4xl text-[#030303] font-bold my-6">DWD Company</h1>
                    <div data-aos="fade-left" data-aos-duration="500" data-aos-delay="2000" class="my-6 text-[#030303]">
                        <p>
                            Welcome to our IT recruitment company! We are delighted to have you here and excited to help you
                            find
                            the best IT professionals for your business needs, whether you require junior or senior talent.
                            <br><br>
                            At our company, we pride ourselves on connecting businesses in The Netherlands and Indonesia
                            with exceptional IT professionals who possess the necessary skills, knowledge, and experience to
                            excel in their roles
                        </p>
                    </div>
                </div>
            </div>
            <div class="my-6">
                <h1 class="text-4xl text-[#030303] font-bold my-6" data-aos="fade-right" data-aos-duration="700" data-aos-delay="400">DWD Company</h1>
                <div class="my-6 text-[#030303]" data-aos="fade-left" data-aos-duration="700" data-aos-delay="600">
                    <p>
                        DWD company was founded in 1990 with a vision to provide innovative technology solutions to our
                        customers. Since our inception, we have focused on the production and sale of high-quality computer
                        hardware.
                        <br><br>
                        Over the years, DWD company experienced rapid growth and successfully expanded our reach to the
                        regional level. We have earned a good reputation for our reliable products and excellent customer
                        service.
                        <br><br>
                        In 2000, we decided to expand our operations to a national level. Through opening new branches in
                        major cities, we have managed to gain a significant market share and become one of the industry
                        leaders in the technology industry.
                        <br><br>
                        In our journey, we also diversified our products by introducing new product lines, including
                        computer software, peripherals and accessories. This helps us reach more customers and provide
                        comprehensive solutions for their technology needs.
                        <br><br>
                        In 2015, we went a step further by entering the international market. We have opened branch offices
                        in several countries and successfully exported our products to the global market. This broadens our
                        scope of business and gives us the opportunity to interact with customers around the world. 
                        <br><br>
                        We continue to innovate and keep abreast of the latest technological developments. By investing in
                        research and new product development, we deliver intelligent and advanced solutions, including
                        artificial intelligence, Internet of Things and wearable technology.
                        <br><br>
                        Besides focusing on business, we also care about sustainability and social responsibility. We are
                        committed to using resources responsibly, adopting environmentally friendly practices, and
                        supporting social initiatives that have a positive impact on society.
                        <br><br>
                        At XYZ Company, we are proud of our journey and constantly strive to provide the best technology
                        solutions to our customers. We thank you for your support and trust during this time, and we are
                        committed to continuing to grow and provide the best service in the industry.

                    </p>
                </div>
            </div>
            <div class="mt-6" data-aos="fade-up" data-aos-duration="1200">
                <div class="bg-primary-silver border-2 border-[#464646] rounded-md h-[130px] flex items-center justify-center">
                    <img src="{{asset('assets/img/logos_spotify.png')}}" alt="" class="mx-6">
                    <img src="{{asset('assets/img/logos_aws.png')}}" alt="" class="mx-6">
                    <img src="{{asset('assets/img/Logo-Hummasoft-Bb 1.png')}}" alt="" class="mx-6">
                    <img src="{{asset('assets/img/Vector(3).png')}}" alt="" class="mx-6">
                </div>
            </div>
        </div>
@endsection
