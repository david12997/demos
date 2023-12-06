<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Gentlemen's Barber Shop - HTML CSS Template</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap" rel="stylesheet">

        <link href="{{asset("barber/css/bootstrap.min.css")}}" rel="stylesheet">

        <link href="{{asset("barber/css/bootstrap-icons.css")}}" rel="stylesheet">

        <link href="{{asset("barber/css/templatemo-barber-shop.css")}}" rel="stylesheet">
<!--

TemplateMo 585 Barber Shop

https://templatemo.com/tm-585-barber-shop

-->
    </head>

    <body>
        @include('aipus')
        <div class="container-fluid">
            <div class="row">

                @include('barber.nav')

                <div class="col-md-8 ms-sm-auto col-lg-9 p-0">

                    @include('barber.inicio')
                    @include('barber.nosotros')
                    @include('barber.descuento')
                    @include('barber.servicios')
                    @include('barber.reserva')
                    @include('barber.precios')
                    @include('barber.contacto')
                    @include('barber.footer')





            </div>

        <!-- JAVASCRIPT FILES -->
        <script src="{{asset("barber/js/jquery.min.js")}}"></script>
        <script src=""{{asset("barber/js/bootstrap.min.js")}}"></script>
        <script src=""{{asset("barber/js/click-scroll.js")}}"></script>
        <script src=""{{asset("barber/js/custom.js")}}"></script>

    </body>
</html>
