@extends("theme2.$theme2.layouts")

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
@section("subrutas")

@endsection
@section("titulo")
{{ Auth::user()->name }}
@endsection

@section("styles")
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
@endsection

@section('content')
<div id="app">


    <idea></idea>


</div>



@endsection

