@extends('layouts/dashboard')

@section('content')
<div class="flex flex-col justify-center items-center h-screen w-screen">
    <div class="flex flex-col justify-center items-center">
        <img class="masthead-avatar mb-5 rounded-full " src="assets/img/logo_techfit.png" alt="..."
            style="width: 150px; height: 150px;" />
    </div>
    <div class="mx-auto px-4 py-8 w-full">
        <div class="text-center">
            <h1 class="text-5xl text-white font-bold mb-4">PLAN DE ALIMENTACIÓN CETOGÉNICA</h1>
            <p class="text-neutral-300 font-medium py-5">Elige una opción para empezar :</p>
        </div>

        <div class="flex flex-col items-center">
            <div class="flex flex-col justify-center"></div>
            <div class="md:w-1/3 mb-4 flex justify-center">
                <a href="/weight-lose"
                    class="border-none text-white bg-yellow-500 hover:bg-yellow-600 border rounded-full shadow-md hover:shadow-xl shadow-yellow-500 hover:bg-yellow-600 flex items-center py-5 px-16 lg:px-20 xl:px-52 w-full justify-between bg-opacity-20 hover:bg-opacity-100 backdrop-blur-sm">
                    <h2 class="font-bold">PERDER GRASA</h2>
                    <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12l-4-4m0 0l-4 4m0 0l-4-4" />
                    </svg>
                </a>
            </div>

            <div class="md:w-1/3 mb-4 flex justify-center">
                <a href="#"
                    class="border-none text-white bg-yellow-500 hover:bg-yellow-600 border rounded-full shadow-md hover:shadow-xl shadow-yellow-500 hover:bg-yellow-600 flex items-center py-5 px-16 lg:px-20 xl:px-52 w-full justify-between bg-opacity-20 hover:bg-opacity-100 backdrop-blur-sm">
                    <h2 class="font-bold">MANTENER PESO</h2>
                    <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 9v2m0 4v2m0-6a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v2m0 4v2m0-6a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v2m0 4v2m0-6a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v2m0 4v2m0-6a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v2m0 4" />
                    </svg>
                </a>
            </div>

            <div class="md:w-1/3 mb-4 flex justify-center">
                <a href="#"
                    class="border-none text-white bg-yellow-500 hover:bg-yellow-600 border rounded-full shadow-md hover:shadow-xl shadow-yellow-500 hover:bg-yellow-600 flex items-center py-5 px-16 lg:px-20 xl:px-52 w-full justify-between bg-opacity-20 hover:bg-opacity-100 backdrop-blur-sm">
                    <h2 class="font-bold">GANAR MÚSCULO</h2>
                    <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M9 17a1 1 0 0 1-2 0v-6a1 1 0 0 1 2 0v6zM9 11a1 1 0 0 1-2 0v-4a1 1 0 0 1 2 0v4zM15 17a1 1 0 0 1-2 0v-6a1 1 0 0 1 2 0v6zM15 11a1 1 0 0 1-2 0v-4a1 1 0 0 1 2 0v4z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection