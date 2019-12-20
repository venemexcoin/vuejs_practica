<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        main {
            display: grid;
            height: 100vh;
            grid-gap: 10px;
            font-family: sans-serif;

            /* Especificar posición de las areas */

            grid-template-areas:
            "header"
            "contenido"
            "izquierda"
            "derecha"
            "footer";
        }

    main > * {

        background-color: goldenrod;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media(min-width: 500px){
        main{
            grid-template-areas:
                "header header header"
                "izquierda contenido derecha"
                ;

            grid-template-columns: 1fr 2fr 1fr;
            grid-template-rows: 2fr 5fr 1fr;

        }
    }

        /* Nombrar la areas  */
    header {
        grid-area: header;
    }

    aside:first-of-type {
        grid-area:izquierda;
    }

    article{
        grid-area: contenido;
    }

    aside:last-of-type {
        grid-area: derecha;
    }

    footer {
        grid-area: footer;
    }



    </style>
</head>
<body>

    <main>

       <header>Header</header>
       <aside>Izquierdo</aside>
       <article>Contenido</article>
       <aside>Derecha</aside>
       <footer>Footer</footer>


    </main>
</body>
</html>





