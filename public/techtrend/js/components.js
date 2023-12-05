
const CardProduct = (props) =>{

    return`

    <div class="swiper-slide slider-products swiper-slide-active" role="group" aria-label="1 / 2" style=" margin-right: 20px;">
    <div class="product-card position-relative">
      <div class="image-holder">
        <img loading="lazy" src="${props.img}" alt="product-item" class="img-fluid">
      </div>
      <div class="cart-concern position-absolute">
        <div class="cart-button d-flex align-items-center">
          <div class="btn btn-medium btn-black d-flex align-items-center">Ver Producto</div>
        </div>
      </div>
      <div class="card-detail p-2">
        <h3 class="card-title text-uppercase">
          <div>${props.title}</div>
        </h3>
        <span class="item-price text-primary" style="font-weight:800;font-size:25px !important;">${props.price}</span>
      </div>
    </div>
  </div>



    `;
}
