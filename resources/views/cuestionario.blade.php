@extends('layouts/main')

@section('title', 'Cuestionario')

@section('image', 'https://cdn.discordapp.com/attachments/1257219566929444868/1257258423112831027/cuestionario.png?ex=6683c0a6&is=66826f26&hm=904583e6cefdef74732d646e8368dbc6799c0d0604f3c8bdcb00020053bdbfe0&')

@section('header-content')
<div class="container mx-auto max-w-7xl text-center p-4 sm:p-8">
  <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4">
    ¡Empieza hoy mismo tu viaje hacia una alimentación saludable y un estilo de vida más activo!
  </h2>
  <p class="text-base sm:text-lg md:text-xl font-medium">
    Completa nuestro cuestionario personalizado y recibe tu plan de alimentación ideal en cuestión de minutos.
  </p>
  <a href="/quest" class="m-3 rounded-full bg-green-600 p-3 px-9 text-white shadow-green-900 shadow-lg"
    style="font-size:20px">Comenzar
    Cuestionario</a>
</div>
@endsection