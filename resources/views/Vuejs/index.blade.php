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
@section('styles')

@endsection

@section('content')
<div id="app">

    <video2></video2>

</div>

@endsection

@section('scripts')

<script>


</script>

@endsection
