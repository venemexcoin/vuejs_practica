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
Bienvenido <br/> zona de Prueba
@endsection
@section('styles')
<style>
main > * {
    background-color: white;
    padding: 10px;
    font-size: 3em;
}


main {
    display: grid;
    grid-gap: 10px;
    grid-template-areas:

    "header"
    "izquierda"
    "contenido"
    "derecha"

}

header{
    grid-area: header;
    text-align: center;
}

aside:first-of-type {
    grid-area: izquierda;
}

article {
    grid-area: contenido;
}

aside:last-of-type {
    grid-area: derecha;
}



@media (min-width: 500px){
    main {
        grid-template-areas:
        "header header header"
        "izquierda contenido derecha"

    }
}


</style>
@endsection

@section('content')
<div id="app">

    <main>
        <header>
            <h1 class="header1">Prueba de Grid</h1>
        </header>
        <aside>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque aut, magnam officiis, quia doloribus quibusdam at aspernatur eius, ea necessitatibus tenetur eveniet ad debitis accusantium rem ullam quidem odit molestiae!</p>
        </aside>
        <article>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam iste eaque facere maxime illo? Voluptatem, mollitia sint ex dignissimos modi tenetur, cumque asperiores possimus delectus eligendi quas atque, recusandae laboriosam?</p>
        </article>
        <aside>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab facere temporibus officiis quas praesentium, magni, totam natus obcaecati quisquam pariatur quae corporis maxime. Iste eius, itaque odit aut quidem officia!</p>
        </aside>
        
    </main>

</div>


@endsection

@section('scripts')
<script>




</script>

@endsection
