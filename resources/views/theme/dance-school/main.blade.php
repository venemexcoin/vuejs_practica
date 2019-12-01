	<!-- main -->
	<div class="main-banner" id="home">
            <!-- header -->
            <header>
                <div class="container">
                    <div class="header d-md-flex justify-content-between align-items-center py-3">
                        <!-- logo -->
                        <div id="logo">
                            <h1><a href="index.html" class="font-weight-bold animated bounce">Dance Bjork
                                    <span class="text-capitalize">Bailemos con nosotros</span>
                                </a>
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
                                            <li><a href="#classes" class="drop-text">Tienda</a></li>
                                            <li><a href="about.html" class="drop-text">blog</a></li>
                                            <li><a href="{{ route("galeria")}}" class="drop-text">Gallery</a></li>
                                            <li><a href="contact.html" class="drop-text">Contactanos</a></li>
                                            <li>
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

                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- //nav -->
                    </div>
                </div>
            </header>
            <!-- //header -->

            <!-- banner -->
            <div class="main-w3pvt">
                <div class="container">
                    <div class="style-banner">
                        <h3 class="text-wh font-weight-bold text-uppercase animated rubberBand">Estar en el <span>PoleDances</span> </h3>
                        <p class="mt-5 text-li">Let’s dance with us and hold your beloved moments, sunt in culpa qui
                            officia
                            id est laborum.</p>
                        <a href="about.html" class="btn button-style mt-sm-5 mt-4">Read More</a>
                    </div>
                </div>
            </div>
            <div class="img-banner-w3">
            <img src="{{asset("assets/$theme/images/b1.png")}}" alt="" class="img-fluid">
            </div>
            <!-- //banner -->
        </div>
        <!-- //main -->
