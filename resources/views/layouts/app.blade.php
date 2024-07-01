<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <div class="py-8 border-t border-black" style="background-color: #038929">
            <div class="container px-4 mx-auto">
                <div class="flex flex-col gap-10 lg:flex-row">

                    <div class="flex flex-col items-center text-center text-white lg:w-1/3">
                        <img class="w-24 h-24 mb-4 rounded-full" src="assets/img/logo_techfit.png"
                            alt="Placeholder Image" />
                        <p class="font-semibold leading-relaxed text-md">Transforma tu salud con nuestro asesoramiento
                            nutricional personalizado. Alcanzar tus objetivos de bienestar nunca ha sido tan fácil.
                            ¡Empieza hoy mismo!</p>
                    </div>

                    <div class="flex flex-col items-center text-center text-white lg:w-1/3">
                        <h2 class="mb-4 text-2xl font-bold text-center lg:text-center">Enlaces</h2>
                        <ul class="space-y-2">
                            <li><a href="/" class="font-semibold text-md">* Sobre nosotros</a></li>
                            <li><a href="#" class="font-semibold text-md">* Contacto</a></li>
                            <li><a href="#" class="font-semibold text-md">* Cuestionario</a></li>
                        </ul>
                    </div>

                    <div class="flex flex-col items-center text-white lg:w-1/3">
                        <h2 class="mb-4 text-2xl font-bold text-center lg:text-left">Contáctenos</h2>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <img class="w-10 h-10" src="assets/img/email.png" alt="Email Icon" />
                                <div>
                                    <p class="text-lg font-semibold">Email</p>
                                    <p class="text-sm font-semibold underline">techfit@hotmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <img class="w-10 h-10" src="assets/img/phone.png" alt="Phone Icon" />
                                <div>
                                    <p class="text-lg font-semibold">Teléfono</p>
                                    <p class="text-sm font-medium">+51 946 855 628</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <img class="w-10 h-10" src="assets/img/location.png" alt="Location Icon" />
                                <div>
                                    <p class="text-lg font-semibold">Ubicación</p>
                                    <p class="text-sm font-medium">Lima</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @stack('modals')

                @livewireScripts
</body>

</html>