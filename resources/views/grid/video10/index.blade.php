<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        section {
            display: grid;
            grid-gap: 10px;
            font-family: sans-serif;
            margin: 20px 0;

        }

    div {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 50px;
    }

    .auto-fill div {
        background-color: goldenrod;
    }

    .auto-fit div{
        background-color: purple;
        color: white;
    }

    .auto-fill {
        grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
    }

    .auto-fit {
        grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    }
    </style>
</head>
<body>

    <section class="auto-fill">

        <div>Columna 1</div>
        <div>Columna 2</div>
        <div>Columna 3</div>
        <div>Columna 4</div>

    </section>

    <section class="auto-fit">

            <div>Columna 1</div>
            <div>Columna 2</div>
            <div>Columna 3</div>
            <div>Columna 4</div>

        </section>
</body>
</html>





