<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    @yield('style')
</head>
<body class="bg-primary-silver">
    @include('layouts.navbar')
    <div class="mt-[86px]">
        @yield('content')
    </div>

    @vite('resources/js/app.js')
    @yield('script')
</body>
</html>