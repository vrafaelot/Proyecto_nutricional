<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'])
    <style>
        .contact-img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body class="h-screen w-screen" style="overflow-x: hidden;"></body>
<header class="w-full">
    @livewire('navigation-menu')

    <div class="w-full relative">
        <div class="z-10 font-bold text-white contact-img w-full text-9xl p-20">
            <div class="flex flex-col w-full justify-center items-center text-center gap-12">
                <h1>@yield('title')</h1>
                @yield('header-content')
            </div>
        </div>
        <img src="@yield('image')" alt="Main image">
    </div>
</header>

<main class="w-full">
    @yield('content')
</main>
<!-- footer -->
@include('partials.footer')
</body>

</html>