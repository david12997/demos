<button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block sidebar collapse p-0">

    <div class="position-sticky sidebar-sticky d-flex flex-column justify-content-center align-items-center">
        <a class="navbar-brand" href="index.html">
            <img src="{{asset("barber/images/templatemo-barber-logo.png")}}" class="logo-image img-fluid" align="">
        </a>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link click-scroll" href="#section_1">Inicio</a>
            </li>

            <li class="nav-item">
                <a class="nav-link click-scroll" href="#section_2">Nosotros</a>
            </li>

            <li class="nav-item">
                <a class="nav-link click-scroll" href="#section_3">Servicios</a>
            </li>

            <li class="nav-item">
                <a class="nav-link click-scroll" href="#reservacion">Reservar</a>
            </li>

            <li class="nav-item">
                <a class="nav-link click-scroll" href="#section_4">Precios</a>
            </li>

            <li class="nav-item">
                <a class="nav-link click-scroll" href="#section_5">Contacto</a>
            </li>
        </ul>
    </div>
</nav>
<script defer>

    $('.navbar-toggler').click(function () {
        console.log('click');
        $('.sidebar').toggleClass('collapse');
        $('.sidebar').toggleClass('collapsed');
    });

    $('.nav-link').click(function () {
        $('.sidebar').toggleClass('collapse');
        $('.sidebar').toggleClass('collapsed');
    });

    $('.click-scroll').click(function () {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 70
        }, 500);
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scroll-top').fadeIn();
        } else {
            $('.scroll-top').fadeOut();
        }
    });

    $('.scroll-top').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.navbar').addClass('bg-white');
        } else {
            $('.navbar').removeClass('bg-white');
        }
    });


</script>
