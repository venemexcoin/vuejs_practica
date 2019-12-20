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
                [contenido-start] 2fr
                ;

            grid-template-rows:
            [header-start] 1fr
            [contenido-start] 2fr
            [footer-start] 1fr;

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
        grid-column: sidebar-start / span 2;
    }

    aside {
        grid-row: contenido-start / span 2;
    }

    footer {
        grid-column: contenido-start;
    }

    </style>
</head>
<body>

    <main>

        <header>Header</header>
        <aside>Sidebar</aside>
        <article>Contenido</article>
        <footer>Footer</footer>

    </main>
</body>
</html>





