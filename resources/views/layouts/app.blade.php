<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-black': '#030303',
                        'primary-silver': '#e5e6e7'
                    },
                }
            }
        }
    </script>

    <style>
        .active {
            text-decoration: underline;
        }


        .answer-faq {
            max-height: 0;
            overflow: hidden;
            transition: max-height ease-in 1s;
        }

        .answer-faq-open {
            max-height: 1000px;
        }

        .faq-icon-open {
            transform: rotate(90deg) scaleY(-1);
        }

        .submenu {
            max-height: 0px;
            overflow: hidden;
            transition: max-height ease-in 0.4s;
        }

        .submenu-open {
            max-height: 1000px;
            transition: max-height ease-in 0.4s;
        }

        .mobile-navbar-close {
            max-width: 0;
            overflow: hidden;
            transition: max-width 0.6s;
        }

        .mobile-navbar-open {
            max-width: 1000px;
            transition: max-width 0.6s;
        }
    </style>
    @yield('style')
</head>

<body class="bg-primary-silver overflow-x-hidden" style="font-family: 'Roboto', sans-serif;">
    @include('layouts.navbar')
    @include('layouts.mobile-navbar')
    <div class="">
        @yield('content')
    </div>
    @include('layouts.footer')
    @yield('script')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
        integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('.faq').click(function() {
                $(this).next('.answer-faq').toggleClass('answer-faq-open');
                $(this).find('.faq-icon').toggleClass('faq-icon-open');
            });

            $('.submenu-link').click(function() {
                $(this).next().toggleClass('submenu-open')
            })

            $('#open-mobile-navbar').click(function() {
                $('#mobile-navbar').toggleClass(['mobile-navbar-open', 'mobile-navbar-close']);
                $('body').toggleClass('overflow-hidden');
            })

            $('#close-mobile-navbar').click(function() {
                $('#mobile-navbar').toggleClass(['mobile-navbar-open', 'mobile-navbar-close']);
                $('body').toggleClass('overflow-hidden');
            })
        });
    </script>
</body>

</html>
