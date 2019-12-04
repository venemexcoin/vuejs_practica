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
producto
@endsection
@section("rutasub")
{{ url('products')}}
@endsection
@section("titulo")
Bienvenido <br/> {{ Auth::user()->name }}
@endsection
@section("styles")
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
@endsection

@section('content')

<div class="jumbotron">
        <h2 class="display-4 product1">Mostrar producto</h2>
        <p class="lead product2">Área destinada a la mostrar la información del producto</p>
      </div>
      <!--texto de la vista -->
      <div class="container ">
        <div class="row">
            <div class="col-md-6">
        <div class="col-md-12">
        <h3>Resumen de producto ({{$product->id}})</h3>
            <hr>
            <div class="card text-white bg-primary mb-3 card1 animate rotateIn" style="max-width: 30rem;">
            <div class="card-header">{{ $product->name}}</div>
                    <div class="card-body">
                      <h5 class="card-title">Primary card title</h5>
                      <p class="card-text">{{ $product->description}}</p>
                    </div>
                  </div>
            </div>
            <div class="product-price">$ {{$product->price}}</div>
            @if($product->cripto == 0)
            <div class="product-price">PTR 0.00000000</div>
            @else
            <div class="product-price">PTR {{ $product->cripto }}</div>
            @endif
					<div class="product-stock">In Stock</div>
    </div>

<hr>
    <!--texto de la vista -->
    <!--imagenes de la vista -->

        <div class="col-md-6">
            <div class="col-md-12">

                <h3>Imagenes producto</h3>
            </div>
                <hr>
                <div class="col-md-12">
                <img src="http://lorempixel.com/g/400/200" class="rounded imgproduct " alt="">
                <img src="http://lorempixel.com/g/400/200" class="rounded imgproduct" alt="">
                <img src="http://lorempixel.com/g/400/200" class="rounded imgproduct" alt="">

                    <img src="http://lorempixel.com/g/400/200" class="rounded imgproduct" alt="">


            </div>
        </div>

    <!--imagenes de la vista -->
</div>
</div>
      @endsection

      @section('scripts')

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

      @endsection
