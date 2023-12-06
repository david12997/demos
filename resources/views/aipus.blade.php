
<style>

.aipus{
    width: 100%;
    height: 40px;
    background: linear-gradient(to right, white, #4301E9);
    position: fixed;
    top: 0;
    z-index: 9999;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.35);
    display: flex;
    justify-content: space-between;
    transition: top 0.3s;

    .container-options{
        width: 70%;
        margi-left:30%;
        display:flex;
        justify-content: flex-end;
        @media(min-width: 800px){
            width: 30%;
            margin-left:70%;
        }

        > button{
            background: #F40100;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            border:none;
            font-size: 15px;
            height:34px;
            margin-top: 3px;
            margin-right:10px;
            display:flex;
            justify-content: center;
            align-items: center;


        }
    }
    .logo{
        width: 30px;
        margin-top: 2px;
        margin-left: 10px;
    }
}
</style>
<div class="aipus">
    <a href="/ " class="logo cursor-pointer">
        <img width="34px" src="https://cms.aipus.co/aipus/assets/rxll78sakisw0koc" alt="">
    </a>
    <div class="container-options">

        <button>Crear proyecto similar<img style="margin-left:5px" width="24px" src="https://cms.aipus.co/aipus/assets/sinmx3wpgb4ccg8s" alt="" /></button>
    </div>
</div>

