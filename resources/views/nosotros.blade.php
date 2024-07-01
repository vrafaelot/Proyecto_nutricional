@extends('layouts/main')

@section('title', 'Nosotros')

@section('image', 'assets/img/nosotros.png')

@section('content')

<div class="container mx-auto max-w-7xl">

    <section class="flex flex-col sm:flex-row gap-8 px-4 sm:px-12 py-8 sm:py-12 justify-center items-center mt-20">
        <div class="sm:w-1/2 flex flex-col justify-center items-center text-center">
            <h2 class="text-3xl sm:text-5xl font-bold mb-4">Acerca de Nosotros</h2>
            <p class="text-base sm:text-lg">
                En TechFit, creemos que la nutrición es la clave para una vida plena y activa. Por eso, hemos desarrollado un sistema único que te permite obtener una dieta y asesoría nutricional personalizadas, adaptadas a tus necesidades y objetivos específicos. Somos un equipo de apasionados por la salud y la tecnología que se ha unido para crear una plataforma que te ayude a alcanzar tus metas de bienestar a través de una alimentación balanceada y deliciosa.
            </p>
        </div>
        <div class="sm:w-1/2 flex justify-center items-center">
            <div class="rounded-full overflow-hidden">
                <img src="assets/img/acerca_de_nosotros.png" alt="Acerca de Nosotros" class="w-full h-auto" style="max-width: 519px;">
            </div>
        </div>
    </section>
    <div class="container mx-auto max-w-7xl">

    <section class="flex flex-row gap-36 px-12 justify-center">
        <div class="sm:w-1/2 flex flex-col justify-center items-center gap-6">
            <div class="rounded-full p-20 text-center">
                <img src="assets/img/nuestra_filosofia.png" width="519">
            </div>
        </div>
    
        <div class="sm:w-1/2 flex flex-col justify-center items-center text-center">
            <h2 class="text-3xl sm:text-5xl font-bold mb-4">Nuestre Filosofia</h2>
            <p class="text-base sm:text-lg">
                Creemos que cada individuo es único y merece una atención personalizada en su viaje hacia una vida más saludable. Es por eso que hemos diseñado un sistema integral que combina la ciencia de la nutrición con la eficiencia de la tecnología para ofrecerte planes alimenticios adaptados a tus necesidades específicas. Nos enfocamos en educarte sobre los beneficios de una alimentación balanceada y deliciosa, proporcionándote no solo recetas y guías nutricionales, sino también el apoyo continuo que necesitas para mantener tus hábitos saludables a largo plazo.
            </p>
        </div>
    </section>

</div>

<section class="p-12 w-full flex flex-col gap-20 justify-center items-center">
    <h1 class="text-5xl font-bold">Valores Destacados en TechFit</h1>
    <div class="flex justify-between w-3/4">
        <div href="https://www.facebook.com" target="_blank">
            <svg width="91" height="90" viewBox="0 0 91 90" fill="none" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect x="0.5" width="90" height="90" fill="url(#pattern0_136_502)" />
                <defs>
                    <pattern id="pattern0_136_502" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_136_502" transform="scale(0.0111111)" />
                    </pattern>
                    <image id="image0_136_502" width="90" height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFTElEQVR4nO2cTWwbVRDHX9/YIuGjUCEotIGIyolntk2KCAc+DlyQUIVoOSEhQOLAFcQJygWDROIZp26JOEDpjaJKfNzgAJTP0oLEgQ8JiYIEBaFypC0pkJBSo10nUWvsrjf73r6N/X7SSDls8mb+fpmdmX1rpTwej8fj8Xg8Ho/H4/F4PPHMlNaCBNuBabdmPAiCvwDjCRBqgOAsMB3Xgh+A0B6olu9R9aFB47JWJi4O/zYwPq+ZPgSh36K1Qx9CXxh/1kLvgVA98kHKl62aj7ZQG70dmA4A019NUbs0plMg9LKaHr0htRPVkU3AtA+Y/kjkg+CfwPhqoYa3qrxSrAU3aqGPkgVGbQTHf0DwJVUf2ZjYCS4NhR9W82+k80Mzvl+sjY6r3LB3ogiCAkxnUoss5wl+Qgve360bWoIHQOikUR8EF0BoSlXuKCinTG5Zr5k+MxsctQr+iqoMD3T0oTI8AIL7bfqgmQ6rydJVygnTNAyMP1gVWRYDFfxEVcfW/c+H6tg6zXgoCx9A6HvFwfUZizx+dVYiw/Kuwq/Unq1XnC8yfZOlD5HYme3svRNF6+lCOolNh6M0Uhke0EJH3PiAhzLJ2dGNz0GAsGTNsm2fWx9w0qrIRS6PLd6JG/1tuFCsbt5qTWgjdbL0hoXdrhWRC4y3uA4OcmYFLt9mXOiorc5BcJArw/3mB0RJZxf9YIynVSW41JjOUKUdzoOSnBrj3eaEZtrtPCDJqTHtMiZ0c56cg6Akf6aF3jEmNAgdcx0Q5NWYfjIndHMo7zqgOS34pKoF14QW/gyC8879EjppTmjX3SDTHDBta/VLM+50LzQumBR61mEg89HzvHZMblmfA6F/Nyn0r3naycs8h9fmIL38qEzhYO7biBW5mTqecp1etOAXxoQGxtfzJjIwbYuui7u+ddebFprpTWNCa8Gn4xZsDU4zPbGif1s2KHImQuNOY0JHB2GSCL1IM0c6FLk1vdiwGt2pjMGbLo8r8dr+npQ3uBQZzr3ejv3b9qFxGsLndYmFbnaVjVQl3LJo5btA6O+VXW8rbdDHyjRxd++OAffmTm5EQteCR5Vx6iMbL3QaqWPQPbiTYSltSHmDskE4qTImNFveyZabl/AUqrIFCN1rRGi2L7L15iXGn3Q01Bot+G06odFyushgNsJ0VFWUVjbRtfLDKxaa3exk082LFnxEZXJMl+loYqE5XrTw8b01kc01L99ldoy33cPajtd2KUJEfWgwPACe65KvSjtUlrSeWrpAgHOJbhz1ocG4gymuRI6OD2fOdBCcWy51usz03RmcNS84H549VC4ApmfjhDa7Xtll8/KMcsZM6aKlcs/2UuCwDQ9jDGNVLgnfXAp3jc01CmmqEQMpoyDlm1Ue0IyPW12gHlUjB13MOqzHloiGWmN9jXryaiTtrEMzvZVJbKsJMD/rOKam8Eo30eQUMD7rwNl8vTWbAyBJydfNozWms5rpvkyDyDuFhNVIN7OO8JrsIlgt1Fc4G+lsL2Tn/GqjnrAa6ZyXX7M+Y+5loAuRNdO7zju/1Qx00bxowU/V9Pglrn3tcZHpiNG3qvoN6Ebk8PDLTGmta197fSe/beXLsvoF6GagxHQgfO7p2tceFxlf9CWc/Z3MfhJns05mOqOZHkuzRt8DsTs5fJss2N73QlkVmel4UfCmVIv0OxAjshb8Wu3afJ1rP3s6J2vBN3xLbXMnM531lYV9kU9lfiauFyk0vyq5bbrQgl+qqaDk2sfeoKK0FnpIC32++B3Pp8Nvk9RVetB3eh6Px+PxeDwej8fj8Xg8KnP+A0bp14KsKWCoAAAAAElFTkSuQmCC" />
                </defs>
            </svg>

            <p class="text-center font-bold mt-4 text-xl">Honestidad</p>
        </div>
        <div href="https://x.com/home" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="91" height="90"
                viewBox="0 0 91 90" fill="none">
                <rect x="0.5" width="90" height="90" fill="url(#pattern0_136_503)" />
                <defs>
                    <pattern id="pattern0_136_503" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_136_503" transform="scale(0.0111111)" />
                    </pattern>
                    <image id="image0_136_503" width="90" height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFfklEQVR4nO2cW4gcVRCGK6dmzIUENYoXjETDZqeqNybqKj4oxIe8GFAQEVFE8YLEB/HFy4NKRzE7VbNZQjAiAVE0CLIP4u0t4IVoVBD1QU3MZRWClyRESaKJMdmMnJ5JzLo7u9O93dM93eeDgmWYPafPP6erzqXOAXA4HA6Hw+FwOBwOh8PhcGQDrcwzwg8YoXdQeASVj6LQASP0NQrVyrXepVMVUa72LUOlQaP0jf3fRhk8Yss0yveD782FwlKHGUZ5FQrtReV6SxM+iUJvwuDSC8aVsWbJhSg0HHxnsjKUfjNKD0Hh8BfOQuU3JhdnvFjlmnflqSLKVb7KfhayjE2wvmcmFII6zAgv8mmhfi9p5ZrSQN+19u+IZWyCImCEH44m0Gn7pWmRy8i/G/G9ueFf9wRMaK8NwpBXjNKDqYt8qleLdx/kFaP8btoCn+E+3oa8gso/pi3wGbYb8goKH8mAwA0TPgJ5BYX+zJDQhyCvYJZch/AI5BVj1zPSFrhpRvgtyCtG+IkMCf0Y5JYBrydtgU8ZVBcvgjxjlLakLbJR/hDyDtbo1rSFRvVugUKsQwt/lF5vpi32GaAIlAdpCSod77zQdNzuxkCRQOEXU+jR66BwaGUeKm/rYG/+vrh7h1qpoPDBDoh8GAY9D4qMUb4jaaFNle9Ou52ZAJVXJyj06rTblylQeSgBkTek3a7s4YNBoddjE1n4tcKMl0MzDIhKL8cQ/DaBv7wU/gGKRD3I+5iOG9lg3460m9E1GOWnp071GuMqThrhp9J+7q4Ea5XbUOmvNoQ+aqRyF3QV/vISKq9E4Y0ovD3Y5xM+aJS+RaGXsFq5sZOvZlnpalTaM4k/3mO/A91CWbgPhQWFfp36NaVdRulJWLfsnI483PN0sVH6YtxEROkrWNt3KWQe6VlgBQt6a6QhFP2BwmuhWrks8WcdWjDb1oXK+wKz9foLZ0FmsQ9c8243wu/FuFQ5GpRX4xVQaHwwJfFuCPyu0uHYJgU63mymfpCtObRgNhSFwO/adQShn5IUFyd2K3utz4ehxZdA3um4uDrhqOCYPf5QGuTrIK+kLzKPdSvKX5oq3ZO76XHawmJLt8IjwfBwyJsPeSB1QXVKt3LYBmiQPoZuJn0huV0bNUKbsVq5uSuXNjMgYD2C/WCUHwW/fw50CxkQrT4N29fw4wmMxwd7L0flKirtbI6KdqHws5HryoBY9emaEf4gFrGDHRy+qTEj5tEWdW2NVFfaImFcYtueHZUhb75N0Q16bVKbuWkLhHGZ0Hdh225P2KLSK+HPzdDOAgvN7R3s8RfOMkL3TrSkGsKOFlho2jFpQ6uLF6GSovD+GOrbVlihjZA/YXBTXmmU328V3KLVFWHfMW2BMI6GK386ZiQwQOcZ5cftgcz466KPwffOKo7QwidsUAp6clPk4OoI4VeD22Xir9OWORBJ5K4WWjv2g9rbbYanfXAo9YZods0IfV6q9V4/LYGd0DxJL6Ydds801sWrkK/RIVR+we4tBpnxfv+cRk4FP4fCP6fdA6dtwvtNzXsENvaXYxM4pNC7gylu9YpzWxZkh1I1XhGsE4RJ08qE0TFUWp9oDsrkPoo/CV6hYcDQp1+FpZlfkf9A1w4TVP63zUFu59K+KVnfM7ORH0KbUxf1/51I+bPYAl07/CdwkOa1Gtb2np9IRWt6qdHLo16RluFA1w52CGOU7kwkALS6/lJ5VXB1ZV4CXdYpV6m/mRnVTtptdgNd1yCLzrYpYpETKdMOdN1IKcj/s5e20j9dE+i6mpp3kR27h7pjKa1Alwv8xkSoeTXxiRYCHwgmVIW5JTdpgl0SHgh6buOi7e1G6Bnr4xOv2+FwOBwOh8PhcDgcDocDise/XSI/J6ULlLgAAAAASUVORK5CYII=" />
                </defs>
            </svg>
            <p class="text-center font-bold mt-4 text-xl">Empatía</p>

        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="91" height="90"
                viewBox="0 0 91 90" fill="none">
                <rect x="0.5" width="90" height="90" fill="url(#pattern0_136_506)" />
                <defs>
                    <pattern id="pattern0_136_506" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_136_506" transform="scale(0.0111111)" />
                    </pattern>
                    <image id="image0_136_506" width="90" height="90"
                        xlink:href="data:image/png;base64,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" />
                </defs>
            </svg>
            <p class="text-center font-bold mt-4 text-xl">Ética</p>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="91" height="90"
                viewBox="0 0 91 90" fill="none">
                <rect x="0.5" width="90" height="90" fill="url(#pattern0_136_504)" />
                <defs>
                    <pattern id="pattern0_136_504" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_136_504" transform="scale(0.0111111)" />
                    </pattern>
                    <image id="image0_136_504" width="90" height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE6UlEQVR4nO2cS4hbZRTHP7+TOK0igyCidbQ4pMk5GR3QURQU3HTTVTd16QMEN1KlCK0LIS5kck4yU0gVtFg3s3QrWnAWIghakGLdTH1huyjWgg/a2qd05NxEGGeSmya5yXfn5vzhQAj3fo8f557vnu9xnTOZTCaTyWQymUwmU4wq27cA00EQPAtCqz0Z4696r5YRV4XJOQeMh3oGvMGwYTDjtOpuAcY/BwdNf2lZLnOqbN/ihV7zgseA8WICoFaDGuNFz/i1Z3rVNQoTLhXiwpRnOhEcjgzHvOC32sfwnpxhyLAWdkjP1nARGgKMCnatvDcgaDwWGgCMzKvpq2CgQfBCaAAwMsMLAUGH7jyN1Ay0GOjgXgjm0RQcnIUOCQ/VYrQY6OAeB+bR4SGBhQ4KDtBitKTLLGERAx3cC8E8mnqEgFc9034npW1qXvCA/megE/YmL3hgfYxswjaPTvaxfRvv3TAY1cr3GOik46OUtm0AvbjjPgM9itDB+IaBTjx24tUItg2G2TcXSqE7DgY6PBQwj6bgwCx0SLrNYrT8D8hlz3hUd1Hl6vREtG+OC1P6O9qIyXhUrzHQ0pe3/QJMh6FWftZJ6Y6unrc4tRVqtBOYGIRWzKOlE1i87pm+1PfqfBXnBn6kqzumveDLnuljYLoy3qGD8TdgXIq8lqcnh9apytxtkbcLNkDw9BiAxute8AtNs/O14myoPmrd2gZtS5ZAnwPGj3wVn3fVh+8M1rG0afBwQP/odlgv9GYUa5M6d8LTk8DlPcD4IQj+CELfR7+5vGeoYWdY6hPuDS/0mRd6zi0U70qqLfk6PqQrMF7oc2C8FhPrr+k1eq3e4zIKeiXH5acTqbw+eztUaTcIvr9+0OpxLDgdlVGl3VqmS6N66ZB60cCPrZRKXnCfPhFxr2EDhLIrzacN92ldLi3qYcf/Sl+QF6e2AtMuEHoHGH8awuDbzX5u1k27tC0u1WdYmG7kasWnekoeqviKZ/wEmC4FgNupH5e84KfaNm2jG6X0wGPXkMG4HFtIozDRTBBoEZhOBgd68+BPRmfWa7Rz+EfjGoUJPYMXC7pWerHtvYfn8sC0AEzng0MbHPp5PcM+3MP+enI2BrabLxfa3QbqwaEBJQ/8oBu6Z9fKezX5WD9A6txBB9DngoNJ3PCsS5sgk6ADTjx1Emh8TgGYzIN2OhgK1jMxGKYa9H+qPJPTtFxXO7zQN6FBZRf0etWLD+pqh06XpsrbNWFhXI52S/EMbX7QnVLwcJDbpuDZAr1GaQsFYwgak5kmNdBNdQURrWRH+zaWY49cNFd1dNB9a+2qjoFuqScQa5eyGH9oWexSloEeUUw00C0Z6BEJzKMNNIzD650LVP7YvUd7ppdyjE/2tfjL05N6r5bRM+i2H6vFP9xmF9xM8qEr5YxLOlfiFmbu31AIlx9ozaMstVa4B8kM321T/yG32QV9ZH1e8LguILe+BHy8nzJi52GaWenfkTG+F3RLQlICpjP9pdgDGNOZrg3TzDJL36qG5u780YIWqrqxU6V8awR7FJ6tdTCx1unGWo3ChKvP3p2bn3ncM74AgkeA8VTvQPEUMH2gZeSk9JiWmZ4voKdZ81j0UnrdC33XcYBkOqHX6LWhm5sJ5QUfbXn675EJHslX6ZHQ7TKZTCaTyWQymUwml2b9C5jyGFZ2WpaUAAAAAElFTkSuQmCC" />
                </defs>
            </svg>
            <p class="text-center font-bold mt-4 text-xl">Profesionalismo</p>

        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="91" height="90"
                viewBox="0 0 91 90" fill="none">
                <rect x="0.5" width="90" height="90" fill="url(#pattern0_136_507)" />
                <defs>
                    <pattern id="pattern0_136_507" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_136_507" transform="scale(0.0111111)" />
                    </pattern>
                    <image id="image0_136_507" width="90" height="90"
                        xlink:href="data:image/png;base64,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" />
                </defs>
            </svg>
            <p class="text-center font-bold mt-4 text-xl">Experiencia</p>
        </div>
    </div>
</section>
<section class="p-12 w-full flex flex-col gap-12 justify-center items-center">
    <h2 class="text-center font-bold text-5xl mb-8">
        Pilares Fundamentales en TechFit
    </h2>
    <div class="flex flex-col sm:flex-row justify-center gap-12 xl:gap-24 text-center w-full">
        <div class="flex flex-col p-8 gap-4 justify-center bg-yellow-300 rounded-2xl sm:w-1/2">
            <div class="flex items-center justify-center gap-1.5">
                <h1 class="font-bold text-2xl">Misión</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                    <path fill="#000000"
                        d="M12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10c0-1.16-.21-2.31-.61-3.39l-1.6 1.6c.14.59.21 1.19.21 1.79a8 8 0 0 1-8 8a8 8 0 0 1-8-8a8 8 0 0 1 8-8c.6 0 1.2.07 1.79.21L15.4 2.6C14.31 2.21 13.16 2 12 2m7 0l-4 4v1.5l-2.55 2.55C12.3 10 12.15 10 12 10a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2c0-.15 0-.3-.05-.45L16.5 9H18l4-4h-3zm-7 4a6 6 0 0 0-6 6a6 6 0 0 0 6 6a6 6 0 0 0 6-6h-2a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4z" />
                </svg>
            </div>
            <p class="text-bold">Empoderar a las personas a alcanzar sus metas de salud y bienestar a través de una alimentación
                personalizada, accesible y sostenible.</p>
            <img src="assets/img/mision.png" class="w-3/4 md:w-1/2 lg:w-2/5 xl:w-1/3 mx-auto">
        </div>

        <div class="flex flex-col p-8 gap-4 justify-center bg-yellow-300 rounded-2xl sm:w-1/2">
            <div class="flex items-center justify-center gap-1.5">
                <h1 class="font-bold text-2xl">Visión</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                    <path fill="#000000"
                        d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5" />
                </svg>
            </div>
            <p class="text-bold">Convertirnos en la plataforma líder de nutrición personalizada, transformando la forma en que las
                personas se alimentan y viven.</p>
            <img src="assets/img/vision.png" class="w-3/4 md:w-1/2 lg:w-2/5 xl:w-1/3 mx-auto">
        </div>
    </div>
</section>



<section class="p-12 w-full flex flex-col gap-20 justify-center items-center">
    <h1 class="text-5xl font-bold">Nuestro Equipo</h1>
    <div class="flex justify-between w-3/4 gap-20">
        <div>
            <img src="assets/img/equipo.png" width=234>
        </div>
        <div>
            <img src="assets/img/equipo.png" width=234>
        </div>
        <div>
            <img src="assets/img/equipo.png" width=234>
        </div>
        <div>
            <img src="assets/img/equipo.png" width=234>
        </div>
    </div>
</section>
@endsection