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

                        @include('components.usecase',[
                            "nombre"=>"TechTrend: Landing de Ventas",
                            "logo"=>"techtrend/images/techtrend.png",
                            "link"=>"/ecommerce/techtrend",
                            "desc"=>"Pagina web Diseñada, Desarrollada y Optimizada para la venta de productos o servicios, con integracion de pasarelas de pago, manejo de productos ,ventas , pedidos y bot de whatsapp para ventas.",


                        ])
                        @include('components.usecase',[
                            "nombre"=>"Barber Shop: Landing de reservacion de turnos y servicios",
                            "logo"=>"barber/images/templatemo-barber-logo.png",
                            "link"=>"/service/barbershop",
                            "desc"=>"Pagina web Diseñada, Desarrollada y Optimizada para la reservacion de turnos,venta de servicios y manejo de clientes, servicios, turnos, citas y bot de whatsapp de atencion al cliente",

                        ])

                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https:www.aipus.co" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                By aipus.co
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Casos de uso
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
