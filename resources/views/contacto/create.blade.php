@extends('layouts/main')

@section('title', 'Contáctanos')

@section('image', '/assets/img/contactanos.png')

@section('content')

<section class="flex flex-col gap-12 p-12 w-full">
    <h2 class="text-5xl text-center font-bold">¡Estamos aquí para ayudarte! Comunícate con nosotros a través
        de los siguientes medios.</h2>
    <div class="flex justify-center gap-12 xl:gap-24 text-center">
        <div class="flex flex-col p-4 gap-4 justify-center bg-yellow-300 rounded-2xl">
            <div class="flex items-center justify-center gap-1.5">
                <h1 class="font-bold">Correo</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
                    <path fill="#000000"
                        d="M424 80H88a56.06 56.06 0 0 0-56 56v240a56.06 56.06 0 0 0 56 56h336a56.06 56.06 0 0 0 56-56V136a56.06 56.06 0 0 0-56-56m-14.18 92.63l-144 112a16 16 0 0 1-19.64 0l-144-112a16 16 0 1 1 19.64-25.26L256 251.73l134.18-104.36a16 16 0 0 1 19.64 25.26" />
                </svg>
            </div>
            <p>techfit@hotmail.com</p>
            <p>techfit2@hotmail.com</p>
        </div>
        <div class="flex flex-col p-4 gap-4 justify-center bg-yellow-300 rounded-2xl">
            <div class="flex items-center justify-center gap-1.5">
                <h1 class="font-bold">Teléfono</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="#000000"
                        d="M6.62 10.79c1.44 2.83 3.76 5.15 6.59 6.59l2.2-2.2c.28-.28.67-.36 1.02-.25c1.12.37 2.32.57 3.57.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z" />
                </svg>

            </div>
            <p>+51 946 855 628</p>
            <p>+51 946 855 628</p>
        </div>
        <div class="flex flex-col p-4 gap-4 justify-center bg-yellow-300 rounded-2xl">
            <div class="flex items-center justify-center gap-1.5">
                <h1 class="font-bold">Horarios de atención</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0-18 0m9 0H8.5M12 7v5" />
                </svg>

            </div>
            <p>Lunes a Viernes</p>
            <p>9 p.m. - 7 p.m.</p>
        </div>
    </div>

    <div class="w-full flex justify-center">
        <p class="text-center font-bold text-2xl w-1/2">Si quieres una consulta mas personalizada comunicate con un
            asesor</p>
    </div>

    <div class="w-full flex justify-center">
        <a target="_blank" href="https://wa.me/"
            class="bg-[#8BC34A] text-white rounded-full py-2 px-4 flex gap-2 text-xl">
            <p> Contacta con un asesor
            </p>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <path fill="#ffffff"
                        d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.42a8.23 8.23 0 0 1 2.41 5.83c0 4.54-3.7 8.23-8.24 8.23c-1.48 0-2.93-.39-4.19-1.15l-.3-.17l-3.12.82l.83-3.04l-.2-.32a8.2 8.2 0 0 1-1.26-4.38c.01-4.54 3.7-8.24 8.25-8.24M8.53 7.33c-.16 0-.43.06-.66.31c-.22.25-.87.86-.87 2.07c0 1.22.89 2.39 1 2.56c.14.17 1.76 2.67 4.25 3.73c.59.27 1.05.42 1.41.53c.59.19 1.13.16 1.56.1c.48-.07 1.46-.6 1.67-1.18s.21-1.07.15-1.18c-.07-.1-.23-.16-.48-.27c-.25-.14-1.47-.74-1.69-.82c-.23-.08-.37-.12-.56.12c-.16.25-.64.81-.78.97c-.15.17-.29.19-.53.07c-.26-.13-1.06-.39-2-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.12-.24-.01-.39.11-.5c.11-.11.27-.29.37-.44c.13-.14.17-.25.25-.41c.08-.17.04-.31-.02-.43c-.06-.11-.56-1.35-.77-1.84c-.2-.48-.4-.42-.56-.43c-.14 0-.3-.01-.47-.01" />
                </svg>
            </span>
        </a>
    </div>
</section>

<hr>

<section class="p-12 w-full">
    <aside class="flex w-full">
        <form method="POST" action="{{ route('contacto.store') }}"
            class="bg-green-500 text-white p-4 rounded-l-xl flex flex-col gap-2">
            @csrf

            <h1 class="font-bold text-3xl">¿Tienes alguna duda o consulta?</h1>
            <p class="py-4">Comunica tus preguntas a nuestro equipo a través de este formulario. Estamos aquí para
                ayudarte.</p>

            <!-- Campo para el nombre prellenado -->
            <label for="nombre">Nombre</label>
            <input id="nombre" type="text" name="nombre" placeholder="Nombre" class="w-full p-2 rounded-xl text-black"
                value="{{ auth()->user()->name }}" readonly>

            <!-- Campo para el correo prellenado -->
            <label for="correo">Correo</label>
            <input id="correo" type="email" name="correo" placeholder="Correo" class="w-full p-2 rounded-xl text-black"
                value="{{ auth()->user()->email }}" readonly>

            <!-- Resto de los campos -->
            <label for="telefono">Teléfono</label>
            <input id="telefono" type="text" name="telefono" placeholder="Teléfono"
                class="w-full p-2 rounded-xl text-black">

            <label for="asunto">Asunto</label>
            <input id="asunto" type="text" name="asunto" placeholder="Asunto" class="w-full p-2 rounded-xl text-black">

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" placeholder="Mensaje"
                class="w-full p-2 rounded-xl text-black"></textarea>

            <div class="w-full flex justify-end">
                <button type="submit" class="my-4 py-3 px-9 bg-lime-400 rounded-full w-1/4">Enviar</button>
            </div>
        </form>

        <div class="w-1/2 bg-neutral-200 p-4 rounded flex flex-col gap-4">
            <h1 class="font-bold text-4xl">Preguntas Frecuentes</h1>

            <div class="bg-[#038929] w-full p-1.5 mb-8">
            </div>

            <div tabindex="0" class="collapse collapse-arrow text-white bg-green-500 border ">
                <input type="checkbox" class="w-full h-full" />
                <div class="collapse-title text-xl font-medium">1. ¿Qué tipos de dietas ofrecen y cómo se selecciona
                    la adecuada para mí?</div>
                <div class="collapse-content">
                    <p>En Techfit, ofrecemos una amplia variedad de planes alimenticios personalizados para
                        satisfacer las necesidades y objetivos individuales de cada persona. Algunos de los tipos de
                        dietas que ofrecemos incluyen:
                    </p>
                    <p>
                        •Dietas para bajar de peso: Diseñadas para ayudarte a alcanzar tus objetivos de pérdida de
                        peso de manera segura y efectiva.
                    </p>
                    <p>
                        •Dietas para aumentar de peso: Adecuadas para personas que buscan aumentar su masa muscular
                        o
                        mejorar su rendimiento deportivo.
                    </p>
                </div>
            </div>
            <div tabindex="0" class="collapse collapse-arrow text-white bg-green-500 border">
                <input type="checkbox" class="w-full h-full" />
                <div class="collapse-title text-xl font-medium">2. ¿Cómo obtengo una dieta personalizada en su
                    sitio?</div>
                <div class="collapse-content">
                    <p>Obtener una dieta personalizada en nuestro sitio web es un proceso sencillo y rápido. Solo
                        tienes que seguir estos pasos:

                        •Crea una cuenta: Regístrate en nuestra plataforma proporcionando tus datos personales y
                        creando una contraseña segura.
                        •Completa el cuestionario de evaluación: Responde un cuestionario detallado sobre tu salud,
                        estilo de vida y objetivos nutricionales.</p>
                </div>
            </div>
            <div tabindex="0" class="collapse collapse-arrow text-white bg-green-500 border">
                <input type="checkbox" class="w-full h-full" />
                <div class="collapse-title text-xl font-medium">3. ¿Puedo actualizar mi dieta si mis objetivos
                    cambian?</div>
                <div class="collapse-content">
                    <p>...</p>
                </div>
            </div>
            <div tabindex="0" class="collapse collapse-arrow text-white bg-green-500 border">
                <input type="checkbox" class="w-full h-full" />
                <div class="collapse-title text-xl font-medium">4. ¿Qué sucede después de recibir mi dieta
                    personalizada?</div>
                <div class="collapse-content">
                    <p>...</p>
                </div>
            </div>
        </div>
    </aside>
</section>

<section class="p-12 w-full flex flex-col gap-20 justify-center items-center mb-8">
    <h1 class="text-6xl font-bold">Nuestras Redes Sociales</h1>
    <div class="flex justify-between w-3/4">
        <a href="https://www.facebook.com" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 16 16">
                <path fill="#388E3C"
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131c.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
            </svg>
        </a>
        <a href="https://x.com/home" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 14 14">
                <g fill="none">
                    <g clip-path="url(#IconifyId1906c241115769d810)">
                        <path fill="#388E3C"
                            d="M11.025.656h2.147L8.482 6.03L14 13.344H9.68L6.294 8.909l-3.87 4.435H.275l5.016-5.75L0 .657h4.43L7.486 4.71zm-.755 11.4h1.19L3.78 1.877H2.504z" />
                    </g>
                    <defs>
                        <clipPath id="IconifyId1906c241115769d810">
                            <path fill="#fff" d="M0 0h14v14H0z" />
                        </clipPath>
                    </defs>
                </g>
            </svg>
        </a>
        <a href="https://www.instagram.com/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                <path fill="#388E3C" fill-rule="evenodd"
                    d="M12 2c-2.716 0-3.056.012-4.123.06c-1.064.049-1.791.218-2.427.465a4.901 4.901 0 0 0-1.772 1.153A4.902 4.902 0 0 0 2.525 5.45c-.247.636-.416 1.363-.465 2.427C2.011 8.944 2 9.284 2 12s.011 3.056.06 4.123c.049 1.064.218 1.791.465 2.427a4.903 4.903 0 0 0 1.153 1.772a4.903 4.903 0 0 0 1.772 1.153c.636.247 1.363.416 2.427.465c1.067.048 1.407.06 4.123.06s3.056-.012 4.123-.06c1.064-.049 1.791-.218 2.427-.465a4.902 4.902 0 0 0 1.772-1.153a4.902 4.902 0 0 0 1.153-1.772c.247-.636.416-1.363.465-2.427c.048-1.067.06-1.407.06-4.123s-.012-3.056-.06-4.123c-.049-1.064-.218-1.791-.465-2.427a4.902 4.902 0 0 0-1.153-1.772a4.901 4.901 0 0 0-1.772-1.153c-.636-.247-1.363-.416-2.427-.465C15.056 2.012 14.716 2 12 2m0 1.802c2.67 0 2.986.01 4.04.058c.976.045 1.505.207 1.858.344c.466.182.8.399 1.15.748c.35.35.566.684.748 1.15c.136.353.3.882.344 1.857c.048 1.055.058 1.37.058 4.041c0 2.67-.01 2.986-.058 4.04c-.045.976-.208 1.505-.344 1.858a3.1 3.1 0 0 1-.748 1.15c-.35.35-.684.566-1.15.748c-.353.136-.882.3-1.857.344c-1.054.048-1.37.058-4.041.058c-2.67 0-2.987-.01-4.04-.058c-.976-.045-1.505-.208-1.858-.344a3.098 3.098 0 0 1-1.15-.748a3.098 3.098 0 0 1-.748-1.15c-.137-.353-.3-.882-.344-1.857c-.048-1.055-.058-1.37-.058-4.041c0-2.67.01-2.986.058-4.04c.045-.976.207-1.505.344-1.858c.182-.466.399-.8.748-1.15c.35-.35.684-.566 1.15-.748c.353-.137.882-.3 1.857-.344c1.055-.048 1.37-.058 4.041-.058m0 11.531a3.333 3.333 0 1 1 0-6.666a3.333 3.333 0 0 1 0 6.666m0-8.468a5.135 5.135 0 1 0 0 10.27a5.135 5.135 0 0 0 0-10.27m6.538-.203a1.2 1.2 0 1 1-2.4 0a1.2 1.2 0 0 1 2.4 0" />
            </svg>
        </a>
    </div>
</section>
@endsection