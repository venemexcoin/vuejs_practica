@extends("theme1.$theme1.layouts")

@section("drop1")
Tienda
@endsection
@section("rutamenu1")

@endsection
@section("drop2")
Blog
@endsection
@section("rutamenu2")

@endsection
@section("drop3")
Home
@endsection
@section("rutamenu3")
{{ url("/")}}
@endsection
@section("titulo")
Our Gallery
@endsection

@section('content')

<div class="row news-grids text-center no-gutters">
        <div class="col-md-4 gal-img">
        <a href="#gal1"><img src="{{ asset("assets/$theme/images/d1.jpg")}}" alt="Gallery Image" class="img-fluid"></a>
        </div>
        <div class="col-md-4 gal-img">
            <a href="#gal2"><img src="{{ asset("assets/$theme/images/d2.jpg")}}" alt="Gallery Image" class="img-fluid"></a>
        </div>
        <div class="col-md-4 gal-img">
            <a href="#gal3"><img src="{{ asset("assets/$theme/images/d3.jpg")}}" alt="Gallery Image" class="img-fluid"></a>
        </div>
    </div>
    <div class="row news-grids text-center no-gutters">
        <div class="col-md-4 gal-img">
            <a href="#gal4"><img src="{{ asset("assets/$theme/images/d4.jpg")}}" alt="Gallery Image" class="img-fluid"></a>
        </div>
        <div class="col-md-4 gal-img">
            <a href="#gal5"><img src="{{ asset("assets/$theme/images/d5.jpg")}}" alt="Gallery Image" class="img-fluid"></a>
        </div>
        <div class="col-md-4 gal-img">
            <a href="#gal6"><img src="{{ asset("assets/$theme/images/d6.jpg")}}" alt="Gallery Image" class="img-fluid"></a>
        </div>
    </div>
    <!-- gallery popups -->
    <!-- popup-->
    <div id="gal1" class="pop-overlay animate text-center">
        <div class="popup">
            <img src="{{ asset("assets/$theme/images/d1.jpg")}}" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal2" class="pop-overlay animate text-center">
        <div class="popup">
            <img src="{{ asset("assets/$theme/images/d2.jpg")}}" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal3" class="pop-overlay animate text-center">
        <div class="popup">
            <img src="{{ asset("assets/$theme/images/d3.jpg")}}" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup3 -->
    <!-- popup-->
    <div id="gal4" class="pop-overlay animate text-center">
        <div class="popup">
            <img src="{{ asset("assets/$theme/images/d4.jpg")}}" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal5" class="pop-overlay animate text-center">
        <div class="popup">
            <img src="{{ asset("assets/$theme/images/d5.jpg")}}" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal6" class="pop-overlay animate text-center">
        <div class="popup">
            <img src="{{ asset("assets/$theme/images/d6.jpg")}}" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- //gallery popups -->

@endsection
