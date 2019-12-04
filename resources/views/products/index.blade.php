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
Bienvenido <br/> {{ Auth::user()->name }}
@endsection

@section('content')

<div class="jumbotron justify-content">
        <h2 class="display-4 product1">Productos y Administración</h2>
        <p class="lead product2">Área destinada a la creación de productos de edición y eliminación de productos </p>

      </div>
      <div class="card">
            <div class="card-header product3">
              Servicios
              @can('products.create')
            <a href="{{ route('products.create')}}" class="btn btn-sm btn-primary float-right">
                Crear
            </a>
              @endcan
            </div>
            <div class="card-body">
                <table class="table table-hover table-small-12">
                    <thead>
                    <tr>
                        <th width="10px">ID</th>
                        <th>Nombre</th>
                        <th colspan="2">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $products as $product)
                    <tr>
                    <td>{{$product->id }}</td>
                    @can('products.show')
                    <td><a href="{{ route("products.show", $product->id)}}">{{ $product->name }}</a></td>
                    @endcan
                    <td>
                    @can('products.edit')
                    <a href="{{ route('products.edit', $product->id)}}" class="btn btn-sm btn-secondary">Edit</a>
                    @endcan
                    </td>
                    <td>
                    @can('products.destroy')
                    {!!Form::open(['route' => ['products.destroy', $product->id],
                    'method' => 'DELETE']) !!}
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                    {!!Form::close()!!}
                    @endcan
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>

            </div>
          </div>

@endsection

@section('scripts')

@endsection

