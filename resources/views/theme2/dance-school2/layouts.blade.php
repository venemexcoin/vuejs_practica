<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Dance School Entertainment Category Bootstrap Responsive Web Template | Gallery :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
        content="Dance School Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="{{ asset("assets/$theme/css/bootstrap.css")}}">
	<!-- Bootstrap-CSS -->
	<link rel="stylesheet" href="{{ asset("assets/$theme/css/style.css")}}" type="text/css" media="all" />
	<!-- Style-CSS -->
    <link href="{{ asset("assets/$theme/css/font-awesome.min.css")}}" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->
    <!-- Anumated plugin-->
    <link href="{{ asset("assets/animate/animate.css")}}" rel="stylesheet">

    <!-- CSS propio-->
    <link href="{{ asset("css/app1.css")}}" rel="stylesheet">
    <!-- /CSS propio-->
    <!-- CSS adicionales-->
    @yield("styles")
    <!-- /CSS adicionales-->
	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
		rel="stylesheet">
    <!-- //Web-Fonts -->

</head>

<body>
<!-- main -->
<div class="main-banner-2" id="home">
		<!-- header -->
		<header>
			<div class="container">
				<div class="header d-md-flex justify-content-between align-items-center py-3">
					<!-- logo -->
					<div id="logo">
                            <h1><a href="index.html" class="font-weight-bold animated bounce">Dance Bjork
                                    <span class="text-capitalize">Bailemos con nosotros</span>
						</h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li>
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down"
											aria-hidden="true"></span>
									</label>
									<a href="#"> <span class="fa fa-bars" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
                                        <!-- administrativas -->
                                        @can('product.index')
                                    <li><a href="{{ route("products.index")}}" class="drop-text">Productos</a></li>
                                        @endcan
                                        @can("users.index")

                                    <li><a href="{{ route("users.index")}}" class="drop-text">Usuarios</a></li>
                                        @endcan
                                        @can("eoles.index")

                                    <li><a href="{{ route("roles.index")}}" class="drop-text">Roles</a></li>
                                        @endcan

                                        <!-- /administrativas -->
										<li><a href="@yield("rutamenu1")" class="drop-text">@yield("drop1")</a></li>
										<li><a href="@yield("rutamenu2")" class="drop-text">@yield("drop2")</a></li>
										<li><a href="@yield("rutamenu3")" class="drop-text">@yield("drop3")</a></li>
                                        <li>
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

                                        </li>
									</ul>
								</li>
								<li><a href="{{ url('/') }}">Home</a></li>
								<li><a href="#">Contactame</a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<!-- //header -->
	</div>
	<!-- //main -->
	<!-- page details -->
	<div class="breadcrumb-w3ls py-1">
		<div class="container">
			<ol class="breadcrumb m-0">
				<li class="breadcrumb-item">
					<a href="{{ url("home")}}">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">
                 <a href="@yield('rutasub')">@yield("subrutas")</a></li>
			</ol>
		</div>
	</div>
    <!-- //page details -->

    <section class="gallery py-5">
            <div class="container py-xl-5 py-lg-3">
                <h3 class="title-w3 mb-5 font-weight-bold animated fadeInRight">@yield("titulo")</h3>
        @yield("content")

            </div>
    </section>


<script src="{{ asset("js/app.js")}}"></script>
<script src="{{ asset("js/app1.js")}}"></script>

@yield("scripts")

</body>
</html>
