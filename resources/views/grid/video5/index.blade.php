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
            /* grid-template-columns: 1fr 2fr; */

            grid-template-columns:
                [sidebar-start] 1fr
                [sidebar-end contenido-start] 2fr
                [contenido-end];

            grid-template-rows:
            [header-start] 1fr
            [header-end contenido-start] 2fr
            [footer-start] 1fr
            [footer-end];

        }

    main > * {
        font-family: sans-serif;
        background-color: goldenrod;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* header{
        grid-column: sidebar-start / span 2;
    }

    footer {
        grid-column: sidebar-start / -1;
    } */

    header{
        grid-column: sidebar-start / contenido-end;
    }

    aside {
        grid-row: header-end / footer-end;
    }

    footer {
        grid-column: contenido-start / contenido-end;
    }

    </style>
</head>
<body>

    <main>

        <header>Header</header>
        <aside>Sidebar</aside>
        <article>
            <div class="container prueba-1">
                <div class="row">
                    <div class="col md-8 offset-2">
            <h1>Titulo de prueba</h1>
            <img src="{{asset("assets/$theme/images/d5.jpg")}}" alt="img-fluid" width="200px" class="float-right">
        </div>
    </div>
</div>

        </article>
        <footer>Footer</footer>

    </main>
</body>
</html>





