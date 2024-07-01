<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css'])

    <style>
        body {
            position: relative;
            min-height: 100vh;
        }

        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("assets/img/fondo.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: -1;
        }

        .container {
            position: relative;
            z-index: 1;
            padding: 20px;
            /* Add padding to create space around the buttons */
        }

        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 50px;
            /* Add margin for spacing below the buttons */
        }

        .btn {
            margin: 10px;
            /* Add margin between buttons */
            padding: 15px 25px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            background-color: #fff;
            /* Set background color for transparency */
            position: relative;
            /* Enable positioning for the overlay */
        }

        .btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            /* Set overlay color */
            opacity: 0.5;
            /* Adjust opacity for desired transparency */
            z-index: -1;
            /* Place the overlay behind the button text */
        }

        .btn:hover {
            background-color: #ccc;
            /* Change background color on hover */
        }
    </style>

</head>

<body class="antialiased">
    <div class="brightness-75 background-image">
    </div>
    <div class="flex flex-col">

        <div class="flex flex-col gap-2 items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0 text-center">

            <h1 class="text-white text-7xl font-extrabold tracking-widest">COME SANO</h1>

            <div class="align-items-center">
                <img class="masthead-avatar mb-5 rounded-full " src="assets/img/logo_techfit.png" alt="..."
                    style="width: 150px; height: 150px;" />
            </div>


            <p class="text-white text-lg">Descubra cuanto peso perderás con nuestra dieta.</p>

            @if (Route::has('login'))
                <div class="hidden py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="rounded-full bg-green-600 p-3 px-9 text-white shadow-green-900 shadow-lg"
                            style="font-size:20px">EMPEZAR</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="m-3 rounded-full bg-green-600 p-3 px-9 text-white shadow-green-900 shadow-lg"
                            style="font-size:20px">INICIAR SESION</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="m-3 rounded-full bg-green-600 p-3 px-9 text-white shadow-green-900 shadow-lg"
                                style="font-size:20px">REGISTRAR</a>
                            <br><br><br><br>
                        @endif

                    @endauth
                </div>
            @endif

        </div>
    </div>

    </div>

</body>

</html>