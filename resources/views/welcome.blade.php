<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles  mix laravel-->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </head>
    <body class="antialiased">
        <div class=" w-[100%] relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">


            <div class="w-[100%] mx-auto p-6 lg:p-8">
                <div class="w-[100%] flex items-center justify-center">
                    <div class="w-[150px] justify-center">
                        <img class="w-[100%]" src="https://cms.aipus.co/aipus/assets/h0s22d26ue0c00gg"  alt=""/>
                        <div class="font-extrabold mt-2 text-[20px]"> CASOS DE USO </div>
                    </div>
                </div>

                <div class="mt-16 w-[100%]">
                    <div class="grid w-[100%] grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="/landing/techtrend" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-cyan-500">
                            <div >

                                <img class="w-[290px] mb-6" src="{{asset("techtrend/images/techtrend.png")}}"  alt=""/>
                                <hr></hr>
                                <h2 class="mt-6 font-extrabold text-black text-[20px]">TechTrend: Landing de Ventas</h2>
                                <h2 class="mt-2 font-semibold text-gray-500 text-[20px]">Desde: $ 990.000 COP <small><strong class="text-black font-extrabold text-[14px]"> Pago único</strong></small></h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-[16px]">
                                    Pagina web Diseñada, Desarrollada y Optimizada para la venta de productos o servicios, con integracion de pasarelas de pago y bot de whatsapp para ventas.</br>

                                   </br>
                                    Dominio incluido</br>
                                    Diseño 100% personalizado </br>s
                                    Integracion  pasarelas de pago </br>
                                    Integracion bot de whatsapp  ventas</br>
                                    Panel administrativo CMS </br>
                                    Tiempo estimado: 8 - 10 días</br>
                                    </br>
                                    Hosting 600.000/anual <small><strong>1er año gratis</strong></small></br>
                                    1 Wordpress Optimizado</br>
                                    50 GB de Almacenamiento</br>
                                    3 GB de RAM</br>
                                    2 núcleos de CPU</br>
                                    SSL ilimitados</br>
                                    20 cuentas de correo electrónico</br>


                                </p>
                            </div>


                        </a>

                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
