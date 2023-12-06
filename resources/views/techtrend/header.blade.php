<style>
    .container-c-e{
        width:120%
        @media(min-width: 800px){
            width:70%
        }
    }
    .cart-empty{
        top: -200px;
        position:relative;
        @media(min-width: 800px){
            top: -50px;
        }
    }

    .container-close-cart{
        z-index:99999;
    }
</style>


<div class="screen-cart">
    <div class="container-cart">
        <div class="container-close-cart">
                <span class="p-1">
                    @include('techtrend.components.icons.close',['color'=>'#000000','width'=>'20','height'=>'20'])
                </span>

        </div>

        <div style=";display:flex;justify-content:center;algin-items:center;position:relative;" class="container-c-e">
            <img  width="100%" src="{{asset("techtrend/images/cart-empty.png")}}" class="cart-empty">
        </div>


    </div>
</div>

<header style="background:white;margin-top:40px;" id="header" class="site-header header-scrolled position-fixed text-black">
      <nav id="header-nav" class="navbar navbar-expand-lg">

        <div class="container-fluid">
          <a class="navbar-brand" href="#inicio">
            <img src="{{asset("techtrend/images/techtrend.png")}}" class="logo">
          </a>

          <button class="navbar-toggler d-flex d-lg-none order-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="navbar-icon">
              <use xlink:href="#navbar-icon"></use>
            </svg>
          </button>


          <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
            <div class="offcanvas-header px-4 pb-0">
              <a class="navbar-brand" href="#inicio">
                <img src="{{asset("techtrend/images/techtrend-mobile.png")}}" class="logo">
              </a>
              <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
            </div>
            <div class="offcanvas-body">
              <ul id="navbar" class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
                <li class="nav-item "  data-bs-toggle="offcanvas"  data-bs-target="#bdNavbar">
                  <a class="nav-link me-4 fw-bold active" href="#inicio">Inicio</a>
                </li>

                <li class="nav-item "  data-bs-toggle="offcanvas"  data-bs-target="#bdNavbar">
                  <a class="nav-link me-4 fw-bold" href="#mobile-products">Productos</a>
                </li>

                <li class="nav-item "  data-bs-toggle="offcanvas"  data-bs-target="#bdNavbar">
                  <a class="nav-link me-4 fw-bold" href="#promos">Promos</a>
                </li>
                <li class="nav-item "  data-bs-toggle="offcanvas"  data-bs-target="#bdNavbar">
                  <a class="nav-link me-4 fw-bold" href="#latest-blog">Nosotros</a>
                </li>

                <li class="nav-item "  data-bs-toggle="offcanvas"  data-bs-target="#bdNavbar">
                  <div class="user-items ps-5">
                    <ul class="d-flex justify-content-end list-unstyled">

                      <li>
                        <span class="cart-desktop">
                          <svg class="cart">
                            <use xlink:href="#cart"></use>
                           </svg> <span style="font-weight:800">(0)</span>
                        </span>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item carrito-mobile cart-mobile"  data-bs-toggle="offcanvas"  data-bs-target="#bdNavbar">
                  <a class="nav-link me-4 fw-bold">Carrito (0)</a>
                </li>

              </ul>
            </div>
          </div>

        </div>

      </nav>
    </header>
<script defer>

    $(document).ready(function () {
        $('.cart-desktop').click(function () {
            $('.screen-cart').css('display','flex')
        })
        $('.close').click(function () {
            $('.screen-cart').css('display','none')
        })
        $('.cart-mobile').click(function () {
            $('.screen-cart').css('display','flex')
        })

        $('.container-close-cart').click(function () {
            $('.screen-cart').css('display','none')
        })
    })
</script>


<script defer>
    let lastScrollTop = 0;
    const aipus = document.querySelector('.aipus');

    window.addEventListener('scroll', function() {
        let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScroll > lastScrollTop) {
            // Scroll hacia abajo
            aipus.style.top = '-50px'; // Asegúrate de que este valor sea igual o mayor a la altura del navbar
            document.getElementById("header").style.top = '-40px';
            document.querySelector('.offcanvas').style.top = '0px';
        } else {
            // Scroll hacia arriba
            aipus.style.top = '0';
            document.getElementById("header").style.top = '0px';
            document.querySelector('.offcanvas').style.top = '40px';
        }

        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Para navegadores móviles
    }, false);

</script>
