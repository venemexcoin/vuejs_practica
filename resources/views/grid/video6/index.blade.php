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
            /* grid-template-columns: 100px 1fr 20%; */
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 1fr 2fr 1fr;

        }

    main > * {

        background-color: goldenrod;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media (max-width: 500px){
        main{
            grid-template-columns: 1fr 1fr;
            grid-template-rows: repeat(5, 1fr);
        }
    }

    @media (max-width: 300px){
        main{
            grid-template-columns: 1fr;
            grid-template-rows: repeat(9, 1fr);
        }
    }

    </style>
</head>
<body>

    <main>

       <div>Elemento 01</div>
       <div>Elemento 02</div>
       <div>Elemento 03</div>
       <div>Elemento 04</div>
       <div>Elemento 05</div>
       <div>Elemento 06</div>
       <div>Elemento 07</div>
       <div>Elemento 08</div>
       <div>Elemento 09</div>

    </main>
</body>
</html>





