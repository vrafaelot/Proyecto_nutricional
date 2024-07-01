<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan de alimentación cetogénica</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css'])

    <style>
        .background-image {
            background-image: url('assets/img/fondo.png');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="w-screen h-screen">
    <div class="flex justify-absolute w-full background-image">
        <div class="flex flex-col justify-center items-center h-screen w-screen gap-4">
            @yield('content')
        </div>
    </div>
</body>

</html>