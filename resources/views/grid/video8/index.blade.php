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
            grid-template-columns:
            /* repeat(8, 1fr) */

            /* 8 columnas con un mínimo y un maximo (limite)*/
            /* repeat(8, minmax(100px, 1fr)); */

            /* 8 columnas con un patron de dos ( 30px y minimo 10% y máximo Flexible */
                /* repeat(4, 30px minmax(10%, 1fr)); */

                /* 8 columnas con un Mínimo marcado por el contenido y un máxmo del 30% */
                /* repeat(8, minmax(min-content, 30%)); */

                /* 8 columnas con maximo y minimo marcado por su contenido */
                repeat(8, minmax(min-content, max-content));
        }

    main > * {

        background-color: goldenrod;
        display: flex;
        justify-content: center;
        align-items: center;
    }




    </style>
</head>
<body>

    <main>

        <div>Columna 1</div>
        <div>Columna 2</div>
        <div>Columna 3</div>
        <div>Columna 4</div>
        <div>Columna 5</div>
        <div>Columna 6</div>
        <div>Columna 7</div>
        <div>Columna 8</div>

    </main>
</body>
</html>





