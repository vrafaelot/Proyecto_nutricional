@extends('layouts/dashboard')

@section('content')
    <h1 class="text-5xl text-white font-bold mb-4">¿Cuál es tu nivel actual de actividad física?</h1>
    <div class="md:w-1/3 mb-4 flex justify-center">
        <a href="#"
            class="border-none text-white bg-yellow-500 hover:bg-yellow-600 border rounded-full shadow-md hover:shadow-xl shadow-yellow-500 hover:bg-yellow-600 flex items-center py-5 px-16 lg:px-20 xl:px-52 w-full justify-between bg-opacity-20 hover:bg-opacity-100 backdrop-blur-sm">
            <h2 class="font-bold">Sedentario (poco o ningún ejercicio)</h2>
        </a>
    </div>
    <div class="md:w-1/3 mb-4 flex justify-center">
        <a href="#"
            class="border-none text-white bg-yellow-500 hover:bg-yellow-600 border rounded-full shadow-md hover:shadow-xl shadow-yellow-500 hover:bg-yellow-600 flex items-center py-5 px-16 lg:px-20 xl:px-52 w-full justify-between bg-opacity-20 hover:bg-opacity-100 backdrop-blur-sm">
            <h2 class="font-bold">Moderadamente activo (ejercicio ocasional)</h2>
        </a>
    </div>
    <div class="md:w-1/3 mb-4 flex justify-center">
        <a href="#"
            class="border-none text-white bg-yellow-500 hover:bg-yellow-600 border rounded-full shadow-md hover:shadow-xl shadow-yellow-500 hover:bg-yellow-600 flex items-center py-5 px-16 lg:px-20 xl:px-52 w-full justify-between bg-opacity-20 hover:bg-opacity-100 backdrop-blur-sm">
            <h2 class="font-bold">Muy activo (ejercicio regular)</h2>
        </a>
    </div>

@endsection