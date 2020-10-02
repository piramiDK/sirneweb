<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}" async="async"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--datatables links-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js" defer></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" defer></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" defer></script>

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" defer></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('/storage/logol.jpg')}}" style="width:600px;" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
            <div class="container">
  
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('/storage/logol.jpg')}}" style="width:110px; height:50px;">
                <em>
                    {{ config('app.name', 'Laravel') }}
                </em></a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

<!--codigo html diomerly-->

                <div class="container">
                    <div class="row ">
                        <ul class="nav navbar-nav "> 

                            <li class="nav-item active">
                                        <a class="nav-link" href="/"><ion-icon name="home"></ion-icon> <b>Inicio</b><span class="sr-only">(current)</span></a>
                                </li>
                                <li class="dropdown active">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" 
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <ion-icon name="document-text"></ion-icon>
                                        <b>Registros</b>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        
                                            
                                            <hr>
                                            <a class="dropdown-item" href="usuario4.php">Nuevo Usuario</a>
                                            <hr> <hr>
                                            <a class="dropdown-item" href="{{ url('/nucleo') }}">Nuevo Núcleo de Recreación</a>
                                            <a class="dropdown-item" href="{{ url('/importExportView') }}">Reporte de prueba Excel</a>
                                           
                                            <hr>
                                        </div>
                                </li>
                                <li class="nav-item active">
                                        
                            </li>
                            
                            
                        </ul>
                        <div style="margin-left:550px">
                        <ul class="nav navbar-nav navbar-right">
                      
                        </ul>
                        </div>
                    </div>
                </div>

<!--fin codigo html diomerly-->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('script')
</body>
</html>


