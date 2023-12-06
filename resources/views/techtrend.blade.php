<!DOCTYPE html>
<html>
  <head>
    <title>TechTrend Tecnologia de vanguardia</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{asset("techtrend/css/bootstrap.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("techtrend/css/style.css")}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="{{asset("techtrend/js/modernizr.js")}}"></script>
    <script src="{{asset("techtrend/js/jquery-1.11.0.min.js")}}"></script>

  </head>
  <body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
    @include('aipus')

    @include('techtrend.viewproduct')
    @include('techtrend.icons')
    @include('techtrend.header')
    @include('techtrend.inicio')
    @include('techtrend.services')
    @include('techtrend.products',['title'=>'Celulares', 'container'=>['c1'=>'productos-container-1','c2'=>'productos-container-2']])
    @include('techtrend.products',['title'=>'Relojes', 'container'=>['c1'=>'productos-container-3','c2'=>'productos-container-4']])
    @include('techtrend.products',['title'=>'Descuentos', 'container'=>['c1'=>'productos-container-5','c2'=>'productos-container-6']])
    @include('techtrend.promo')
    @include('techtrend.nosotros')
    @include('techtrend.testimonios')
    @include('techtrend.cupones')
    @include('techtrend.footer')



    <script src="{{asset("techtrend/js/jquery-1.11.0.min.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{asset("techtrend/js/bootstrap.bundle.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("techtrend/js/plugins.js")}}"></script>
    <script src="{{asset("techtrend/js/components.js")}}"></script>
    <script type="text/javascript" src="{{asset("techtrend/js/script.js")}}"></script>

  </body>
</html>
