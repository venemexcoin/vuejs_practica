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
            [start]
             repeat(4,
                [col-lg-start] minmax(80px, 1fr)
                [col-lg-end col-lg-start] minmax(40px, 1fr)
                [col-sm-end col-sm-start] minmax(20px, 1fr)
             )
             [end]
             ;
        }

    main > * {

        background-color: goldenrod;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    div:first-of-type {
        background-color: purple;
        color: white;
        grid-column: col-lg-start / end;
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
        <div>Columna 9</div>
        <div>Columna 10</div>
        <div>Columna 11</div>
        <div>Columna 12</div>

    </main>
</body>
</html>





