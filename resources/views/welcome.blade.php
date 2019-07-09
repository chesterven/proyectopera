<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Refuerzo académico</title>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
                  @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/home') }}">Inicio</a></li>
                    @else
      						      <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>

                        @if (Route::has('register'))
                          <li><a href="{{ route('register') }}">Registrarse</a></li>
                        @endif
                    @endauth
                  @endif
      					</ul>
      					<!-- /nav -->
      				</div>
      			</div>
      			<!-- /Main Nav -->
      		</div>
          <!-- Aside Nav -->
    			<div id="nav-aside">
    				<ul class="nav-aside-menu">
              @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/home') }}">Inicio</a></li>
                @else
                    <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>

                    @if (Route::has('register'))
                      <li><a href="{{ route('register') }}">Registrarse</a></li>
                    @endif
                @endauth
              @endif
    				</ul>
    				<button class="nav-close nav-aside-close"><span></span></button>
    			</div>
    			<!-- /Aside Nav -->
      		<!-- /NAV -->
      	</header>
      <!-- /Header -->

            <div class="content">
                <div class="title m-b-md">
                    Página de refuerzo académico
                </div>

            </div>
        </div>
    </body>
</html>
