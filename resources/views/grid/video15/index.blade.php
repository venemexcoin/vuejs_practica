<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        main {
            height: 100vh;
            display: grid;
            grid-gap: 10px;
            font-family: sans-serif;
            /* grid-template-areas:
                "header header header"
                "izquierda contenido derecha1"
                "izquierda contenido derecha2"
                "izquierda footer footer"
            ;
            grid-template-rows:
                [inicio] 1fr [contenido-start] 2fr 1fr 1fr [fin];

            grid-template-columns:
                [inicio] 1fr [contenido-start] 2fr 1fr [fin]; */

            grid-template:
                /* Filas*/
                [inicio] "header header header" 1fr
                [contenido-start] "izquierda contenido derecha1" 2fr
                "izquierda contenido derecha2" 1fr
                "izquierda footer footer" 1fr [fin]
                /
                /* Columnas*/
                [inicio] 1fr [contenido-start] 2fr 1fr [fin]
            ;
        }


        main > * {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: goldenrod;
        }

        header {
            grid-area: header;
        }
        aside:first-of-type {
            grid-area: izquierda;
        }
        article{
            grid-area: contenido;
        }
        aside:nth-of-type(2) {
            grid-area: derecha1;
        }
        aside:last-of-type {
            grid-area: derecha2;
        }
        footer {
            grid-area: footer;
        }

    </style>
</head>
<body>
<main>
    <header>Header</header>
    <aside>Izquierda</aside>
    <article>Contenido</article>
    <aside>Derecha 1</aside>
    <aside>Derecha 2</aside>
    <footer>Footer</footer>
</main>


</body>
</html>






