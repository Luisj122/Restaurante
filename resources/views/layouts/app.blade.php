<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            
    }
    </style>
    
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
