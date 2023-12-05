(function($) {

    "use strict";

    var searchPopup = function() {
      // open search box
      $('#header-nav').on('click', '.search-button', function(e) {
        $('.search-popup').toggleClass('is-visible');
      });

      $('#header-nav').on('click', '.btn-close-search', function(e) {
        $('.search-popup').toggleClass('is-visible');
      });

      $(".search-popup-trigger").on("click", function(b) {
          b.preventDefault();
          $(".search-popup").addClass("is-visible"),
          setTimeout(function() {
              $(".search-popup").find("#search-popup").focus()
          }, 350)
      }),
      $(".search-popup").on("click", function(b) {
          ($(b.target).is(".search-popup-close") || $(b.target).is(".search-popup-close svg") || $(b.target).is(".search-popup-close path") || $(b.target).is(".search-popup")) && (b.preventDefault(),
          $(this).removeClass("is-visible"))
      }),
      $(document).keyup(function(b) {
          "27" === b.which && $(".search-popup").removeClass("is-visible")
      })
    }

    var initProductQty = function(){

      $('.product-qty').each(function(){

        var $el_product = $(this);
        var quantity = 0;

        $el_product.find('.quantity-right-plus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($el_product.find('#quantity').val());
            $el_product.find('#quantity').val(quantity + 1);
        });

        $el_product.find('.quantity-left-minus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($el_product.find('#quantity').val());
            if(quantity>0){
              $el_product.find('#quantity').val(quantity - 1);
            }
        });

      });

    }

    $(document).ready(function() {

      searchPopup();
      initProductQty();

      var swiper = new Swiper(".main-swiper", {
        speed: 500,
        navigation: {
          nextEl: ".swiper-arrow-prev",
          prevEl: ".swiper-arrow-next",
        },
      });

      var swiper = new Swiper(".product-swiper", {
        slidesPerView: 2,
        spaceBetween: 10,
        pagination: {
          el: "#mobile-products .swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          0: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          980: {
            slidesPerView: 3,
            spaceBetween: 20,
          }
        },
      });

      var swiper = new Swiper(".product-watch-swiper", {
        slidesPerView: 2,
        spaceBetween: 10,
        pagination: {
          el: "#smart-watches .swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          0: {
            slidesPerView:1,
            spaceBetween: 20,
          },
          980: {
            slidesPerView: 3,
            spaceBetween: 20,
          }
        },
      });

      var swiper = new Swiper(".testimonial-swiper", {
        loop: true,
        navigation: {
          nextEl: ".swiper-arrow-prev",
          prevEl: ".swiper-arrow-next",
        },
      });



      const navItem = document.querySelectorAll('.nav-item');

      navItem.forEach(item => {

        item.addEventListener('click', () => {


            $( ".offcanvas-end" )[0].classList.remove('show');

          if ($( ".offcanvas-backdrop" ) && $( ".offcanvas-backdrop" ).length ) {
            //do something
            $( ".offcanvas-backdrop" )[0].classList.remove('show');
            $( ".offcanvas-backdrop" ).remove();

          }
          $( ".offcanvas-end" )[0].style.visibility = 'hidden';
          $( ".offcanvas-end" ).removeAttr('role');
          $( ".offcanvas-end" ).removeAttr('aria-modal');
          $(".offcanvas-end").attr("aria-hidden", "true");
          $('body').attr('style', '');


        });

      });

      const images = [
        '/techtrend/images/banner-image.png',
        '/techtrend/images/main-banner-1.png',
        '/techtrend/images/main-banner-2.png',
        '/techtrend/images/main-banner-3.png',
        '/techtrend/images/main-banner-4.png'
      ];

      const images2 = [

        '/techtrend/images/main-banner-4.png',
        '/techtrend/images/main-banner-3.png',
        '/techtrend/images/main-banner-2.png',
        '/techtrend/images/main-banner-1.png',
        '/techtrend/images/banner-image.png',

      ];

      const celulares =[
        {
          img:'/techtrend/images/product-item1.jpg',
          title:'iPhone 10 Pro Max 512GB',
          price:'$ 3.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item2.jpg',
          title:'Samsung Galaxy S10 Plus 128GB',
          price:'$ 2.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item3.jpg',
          title:'iPhone 10 Pro Max 512GB',
          price:'$ 3.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item4.jpg',
          title:'Samsung Galaxy S10 Plus 128GB',
          price:'$ 2.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item5.jpg',
          title:'iPhone 10 Pro Max 512GB',
          price:'$ 3.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item1.jpg',
          title:'iPhone 10 Pro Max 512GB',
          price:'$ 3.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item2.jpg',
          title:'Samsung Galaxy S10 Plus 128GB',
          price:'$ 2.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item3.jpg',
          title:'iPhone 10 Pro Max 512GB',
          price:'$ 3.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item4.jpg',
          title:'Samsung Galaxy S10 Plus 128GB',
          price:'$ 2.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item5.jpg',
          title:'iPhone 10 Pro Max 512GB',
          price:'$ 3.560.00 COP'
        }


      ];
      const relojes =[
        {
          img:'/techtrend/images/product-item6.jpg',
          title:'Samsung Galaxy S10 Plus 128GB',
          price:'$ 2.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item7.jpg',
          title:'iPhone 10 Pro Max 512GB',
          price:'$ 3.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item8.jpg',
          title:'Samsung Galaxy S10 Plus 128GB',
          price:'$ 2.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item9.jpg',
          title:'iPhone 10 Pro Max 512GB',
          price:'$ 3.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item10.jpg',
          title:'Samsung Galaxy S10 Plus 128GB',
          price:'$ 2.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item6.jpg',
          title:'Samsung Galaxy S10 Plus 128GB',
          price:'$ 2.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item7.jpg',
          title:'iPhone 10 Pro Max 512GB',
          price:'$ 3.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item8.jpg',
          title:'Samsung Galaxy S10 Plus 128GB',
          price:'$ 2.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item9.jpg',
          title:'iPhone 10 Pro Max 512GB',
          price:'$ 3.560.00 COP'
        },
        {
          img:'/techtrend/images/product-item10.jpg',
          title:'Samsung Galaxy S10 Plus 128GB',
          price:'$ 2.560.00 COP'
        }
      ]


      let currentIndex = 0;
      const LengthImages = images.length;

      setInterval(() => {
        currentIndex = (currentIndex + 1) % LengthImages;
        $('#banner-changed').fadeOut(800, function() {
          $(this).attr('src', images[currentIndex]).fadeIn(800);
        })

        $('#banner-changed-2').fadeOut(800, function() {
          $(this).attr('src', images2[currentIndex]).fadeIn(800);
        })

      }, 4000);

      for(let i =0; i< 10; i++){
        $('#productos-container-1').append(CardProduct(celulares[i]));
        $('#productos-container-2').append(CardProduct(celulares[i]));
        $('#productos-container-3').append(CardProduct(relojes[i]));
        $('#productos-container-4').append(CardProduct(relojes[i]));
        $('#productos-container-5').append(CardProduct(relojes[i]));
        $('#productos-container-6').append(CardProduct(relojes[i]));


      }
      for(let i =0; i< 4; i++){
        $('#productos-container-1').append('<div class="space-f" style="width:50px;margin-left:20px;margin-right:20px;min-width:300px;"></div>');
        $('#productos-container-2').append('<div class="space-f" style="width:50px;margin-left:20px;margin-right:20px;min-width:300px;"></div>');
        $('#productos-container-3').append('<div class="space-f" style="width:50px;margin-left:20px;margin-right:20px;min-width:300px;"></div>');
        $('#productos-container-4').append('<div class="space-f" style="width:50px;margin-left:20px;margin-right:20px;min-width:300px;"></div>');
        $('#productos-container-5').append('<div class="space-f" style="width:50px;margin-left:20px;margin-right:20px;min-width:300px;"></div>');
        $('#productos-container-6').append('<div class="space-f" style="width:50px;margin-left:20px;margin-right:20px;min-width:300px;"></div>');
      }

      $('.cart-desktop').on('click', function(e){

        $('.screen-cart').css('display','flex');

        $('.screen-cart').on('click', function(e){

            $('.screen-cart').css('display','none');

        });

        $('.container-cart').on('click', function(e){

            e.stopPropagation();
        });

        $('.container-close-cart').on('click', function(e){

            $('.screen-cart').css('display','none');

        });

      });






    }); // End of a document ready

})(jQuery);


