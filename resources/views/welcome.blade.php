<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SIRNE</title>
        <!-- favicon -->
        <link rel="shortcut icon" href="{{asset('/storage/logol.jpg')}}" style="width:600px;" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}" async="async"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #e4e4e9;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container-fluid text-center ">   
            <!-- botones principales--> 
            <?php
           // include("principal.html");
            ?>
            <!-- botones principales--> 
             <br>   
            <div class="col-sm-10 text-left"> 
            <h1 id="continue">Bienvenidos al Sistema de Registro de Núcleos</h1>
            
                <hr>
                    <p class="font-italic"><em>La Plataforma SIRNE realiza el Registro y Control de los núcleos de recreación.</em></p>
                    <br>
                    <img src="{{asset('/storage/logol.jpg')}}" style="width:670px; height:260px;">
                    
            </div>
        </div>
        </div>
    </body>
</html>