<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Refuerzo académico</title>

    <!-- Scripts -->
  	<script src="{{ asset('js/jquery.min.js') }}"></script>
  	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
  	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  	<script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
  <!-- HEADER -->
    <header id="header">
      <!-- NAV -->
      <div id="nav">
        <!-- Top Nav -->
        <div id="nav-top">
          <div class="container">
            <!-- social -->
            <!-- <ul class="nav-social">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>-->
            <!-- /social -->

            <!-- logo -->
            <div class="nav-logo">
              <a href="{{ url('/home') }}" class="logo"><img src="{{ asset('/img/minerva.png') }}" alt=""></a>
            </div>
            <!-- /logo -->

            <!-- search & aside toggle -->
            <div class="nav-btns">
              <button class="aside-btn"><i class="fa fa-bars"></i></button>
                <!-- <button class="search-btn"><i class="fa fa-search"></i></button>
              <div id="nav-search">
                <form>
                  <input class="input" name="search" placeholder="Enter your search...">
                </form>
                <button class="nav-close search-close">
                  <span></span>
                </button>
              </div> -->
            </div>
            <!-- /search & aside toggle -->
          </div>
        </div>
        <!-- /Top Nav -->

        <!-- Main Nav -->
        <div id="nav-bottom">
          <div class="container">
            <!-- nav -->
            <ul class="nav-menu">
              <li><a href="{{ url('/home') }}">Inicio</a></li>
              @if(Route::has('login'))
                @auth
                  <li class="has-dropdown">
      							<a href="#">¿Qué quieres reforzar hoy?</a>
      							<div class="dropdown">
      								<div class="dropdown-body">
      									<ul class="dropdown-list">
      										<li><a href="category.html">Lectura</a></li>
      										<li><a href="blog-post.html">Mapa conceptual</a></li>
      									</ul>
      								</div>
      							</div>
      						</li>
                  <li><a href="{{ url('/home') }}">Consejos</a></li>
                  <li><a href="{{ url('/home') }}">Comentarios</a></li>
                @endauth
              @endif
              @guest
                    <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>

                    @if (Route::has('register'))
                      <li><a href="{{ route('register') }}">Registrarse</a></li>
                    @endif
              @else
                  <li class="has-dropdown">
                    <a href="#">{{ Auth::user()->name }}</a>
                    <div class="dropdown">
                      <div class="dropdown-body">
                        <ul class="dropdown-list">
                          <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Cerrar sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
              @endguest
            </ul>
            <!-- /nav -->
          </div>
        </div>
        <!-- /Main Nav -->
      </div>
      <!-- Aside Nav -->
      <div id="nav-aside">
        <ul class="nav-aside-menu">
          <li><a href="{{ url('/home') }}">Inicio</a></li>
          @if(Route::has('login'))
            @auth
              <li class="has-dropdown">
                <a href="#">¿Qué quieres reforzar hoy?</a>
                <div class="dropdown">
                  <div class="dropdown-body">
                    <ul class="dropdown-list">
                      <li><a href="category.html">Lectura</a></li>
                      <li><a href="blog-post.html">Mapa conceptual</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li><a href="{{ url('/home') }}">Consejos</a></li>
              <li><a href="{{ url('/home') }}">Comentarios</a></li>
            @endauth
          @endif
          @guest
                <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>

                @if (Route::has('register'))
                  <li><a href="{{ route('register') }}">Registrarse</a></li>
                @endif
          @else
              <li class="has-dropdown">
                <a href="#">{{ Auth::user()->name }}</a>
                <div class="dropdown">
                  <div class="dropdown-body">
                    <ul class="dropdown-list">
                      <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Cerrar sesión') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
          @endguest
        </ul>
        <button class="nav-close nav-aside-close"><span></span></button>
      </div>
      <!-- /Aside Nav -->
      <!-- /NAV -->
    </header>
  <!-- /Header -->
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
