<style>

    .view-product {
        width: 100vw;
        height: 100vh;
        background: rgba(0,0,0,0.5);
        position: fixed;
        top: 0;
        z-index: 9999;
        display:none;
        justify-content: center;
        align-items: center;

        > .container-viewproduct {
            width: 94%;
            height: 90%;
            background: #fff;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            @media(min-width: 800px){
                width: 80%;
                height: 80%;
            }

            > .close-view-product {
                position: absolute;
                top: 5px;
                right: 10px;

                cursor: pointer;
            }
        }

        > .container-viewproduct > .body-view-product {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;

            > .container-1 {

                width: 100%;
                height: 40%;
                margin-top: 10%;
                display: flex;
                justify-content: center;
                align-items: center;
                @media(min-width: 800px){
                    width: 50%;
                    height:90%;
                    margin-top:3%
                }

                > img {
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                }
            }

            > .container-2 {
                position: relative;

                width: 100%;
                height: 50%;
                padding: 10px;
                @media(min-width: 800px){
                    width: 50%;
                    height:90%;
                    margin-top:3%
                }
            }
        }

        .descripcion-producto{
            height:120px;
            @media(min-width: 800px){
                height:150px;
            }

        }
    }

</style>

<div class="view-product">
    <div class="container-viewproduct">
        <div class="close-view-product">
            @include('techtrend.components.icons.close',['color'=>'#000000','width'=>'20','height'=>'20'])
        </div>
        <div class="body-view-product">
            <div  class="container-1">
                <img src="{{asset("techtrend/images/techtrend.png")}}" alt="">
            </div>
            <div class="container-2">
                <h4><strong class="nombre-producto">Nombre producto</strong></h4>
                <h3><strong class="precio-producto">Precio producto</strong></h3>
                <hr style="background:gray;margin-left:5%;width:90%;">
                <p style="overflow-y:scroll;" class="descripcion-producto">
                    lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                    lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                    lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                    lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                </p>

                <div style="width:90%;position:absolute;bottom:10px;left:5%;" class="container-button">
                    @include('techtrend.components.buttons.button1')
                </div>
            </div>
        </div>
    </div>
</div>

<script defer>

    window.addEventListener('load',()=>{
        const viewProduct = document.querySelector('.view-product');
        const closeViewProduct = document.querySelector('.close-view-product');
        const containerViewProduct = document.querySelector('.container-viewproduct');
        const productCard = document.querySelectorAll('.product-card');


        closeViewProduct.addEventListener('click',()=>{
            viewProduct.style.display = 'none';
        });


        viewProduct.addEventListener('click',()=>{
            viewProduct.style.display = 'none';
        });

        containerViewProduct.addEventListener('click',(e)=>{
            e.stopPropagation();
        });

        productCard.forEach((card,index)=>{
            card.addEventListener('click',()=>{
                console.log(card.children[2].children[1].innerHTML);
                viewProduct.style.display = 'flex';

                // set new image
                containerViewProduct.children[1].children[0].children[0].src = card.children[0].children[0].src;

                // set new name
               containerViewProduct.children[1].children[1].children[0].children[0].innerHTML =card.children[2].children[0].children[0].innerHTML;

               // set new price
                containerViewProduct.children[1].children[1].children[1].children[0].innerHTML = card.children[2].children[1].innerHTML
            });
        });


    })




</script>
