<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

:root{
        --primary: #FF4C29;
        }

        ::selection{
        background: var(--primary);
        }

        *{
        margin: 0;
        padding: 0;
        outline: none;
        box-sizing: border-box;
        line-height: 1.5;
        transition: all .3s ease-in-out;
        font-family: "Josefin Sans", Arial;
        }

        body{
        background: #fff;
        background-clip
        }

        body::before{
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: -1;
        content: "";
        position: absolute;
        background: linear-gradient(0deg, var(--primary), #fff);
        clip-path: circle(50% at right 0%);
        }

        header{
        display: flex;
        align-items: center;
        justify-content: space-around;
        padding: 2rem 0;
        }

        header .right{
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        header .right ul{
        display: flex;
        align-items: center;
        justify-content: space-between;
        }

        header .right ul li{
        list-style-type: none;
        margin: 0 1rem;
        cursor: pointer;
        }

        header .right ul li:hover{
        color: var(--primary);
        }

        header .right .cart{
        font-size: 30px;
        margin: 0 2rem;
        cursor: pointer;
        }

        header .left .logo span{
        color: var(--primary);
        }

        header .right .cart:hover{
        color: var(--primary);
        }

        header .left{
        display: flex;
        justify-content: center;
        align-items: center;
        }

        header .left .toggle{
        font-size: 30px;
        cursor: pointer;
        display: none;
        margin: 0 1rem;
        justify-content: center;
        align-items: center;
        }

        .btn{
        padding: 0.5rem 2rem;
        outline: none;
        border: none;
        background: #fff;
        color: var(--primary);
        margin: 0 1rem;
        border-radius: 5px;
        cursor: pointer;
        }

        .btn-secondary{
        background: var(--primary) !important;
        color: #fff !important;
        }

        .btn-secondary:hover{
        background: #eee !important;
        color: var(--primary) !important;
        }

        .btn:hover{
        background: var(--primary);
        color: #fff;
        }

        .banner{
        display: flex;
        margin-top: 2rem;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
        }

        .banner .left{
        width: 380px;
        }

        .banner .left h1{
        text-transform: capitalize;
        font-size: 2em;
        }

        .banner .left h1 span{
        color: var(--primary);
        border-bottom: 3px solid var(--primary);
        }

        .banner .left .buttons{
        margin: 2rem 0;
        }

        .banner .left .buttons .btn{
        margin: 0;
        }

        .banner .left .buttons .btn:nth-child(2){
        margin: 0 1rem;
        }

        .banner .left p{
        color: #999;
        font-size: 14px;
        }

        .banner .right{
        width: 380px;
        }

        .banner .right img{
        width: 350px;
        }

        .cards{
        display: flex;
        width: 100%;
        margin: auto;
        /*   background: red; */
        align-items: center;
        margin: 2rem 0;
        flex-wrap: wrap;
        justify-content: space-around;
        }

        .cards .mainCard{
        /*   background: blue; */
        width: 85%;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: space-around;
        }

        .cards .card{
        display: flex;
        background: #fff;
        margin-bottom: 2rem;
        align-items: center;
        border-radius: 5px;
        box-shadow: 0 10px 21px rgba(0, 0, 0, 0.2);
        padding: 0.5rem 0.7rem;
        justify-content: center;
        }

        .cards .card img{
        width: 100px;
        }

        .cards .card h2{
        color: #999;
        margin: 0 1rem;
        font-size: 16px;
        }

        @media (max-width: 999px){
        .banner p{
        text-align: justify;
        }

        header{
        flex-direction: column;
        }

        header .left{
        margin-bottom: 1rem;
        }

        header .right ul li{
        margin: 0 0.8rem;
        }

        .banner{
        margin: 2rem 0;
        flex-direction: column;
        }

        .banner .right{
        margin: 2rem 0;
        }

        .cards{
        flex-direction: column;
        }
        }

        @media (max-width: 650px){
        header .right{
        display: none;
        }

        header .left .toggle{
        display: flex;
        font-size: 40px;
        }

        header .left{
        justify-content: space-around;
        width: 100%;
        }

        body.active header .right{
        display: flex;
        flex-direction: column;
        }

        body.active header{
        background: #fff;
        transition: 0s;
        }

        body.active header .right ul{
        flex-direction: column;
        }

        body.active header .right ul li{
        margin: 1rem 0;
        }

        body.active header .right .cart{
        margin: 1rem 0;
        }

        .banner .left, .banner .right{
            width: auto;
            padding: 0 1rem;
        }
        a{
            text-decoration: none
        }
}

</style>
<body>
    <header>
        <div class="left">
          <h1 class="logo">Cravin’<span>Cactus</span></h1>
          <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
          </div>
        </div>
        <div class="right">
          <ul>
          @if (Route::has('login'))
                    @auth
                    <li>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('login') }}" >Log in</a>
                    </li>
                        @if (Route::has('register'))
                         <li>
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                        @endif
                    @endauth
                </div>
            @endif
            </ul>
        </div>
      </header> 
          <div class="row justify-content-center">
            <div class="col-11">
                <div class="row justify-content-around p-4 m-3">
                    @foreach ($platos as $plato)
              
                        <div class="col-md-3 position-relative">
                            <div class="card" style="width: 18rem;">
                                <h1 class="card-title text-center font-weight-bold">{{$plato->nombre}}</h1><br>
                                <img src="{{ asset($plato->foto) }}" class="img-fluid " />
                                <div class="card-body">
                                <p class="card-text">{{$plato->descripcion}}</p>
                                <p class="card-text">{{$plato->precio}}</p>
                                    @foreach ($restaurantes as $restaurante)
                                        @if ($restaurante->id == $plato->retaurante_id)
                                            <p class="card-text">{{$restaurante->nombre}}</p> 
                                        @endif
                                        
                                    @endforeach
                                
                                </div>
                                <div class="buttons">
                                    <a href="{{ route('login') }}" class="btn btn-secondary">Hacer Pedido</a>
                                </div><br>
                            </div>
                            <br><br><br><br>
                        </div>
                        
                    @endforeach
                </div>
  
            </div>
            
        </div> 
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    
    
</body>
</html>
