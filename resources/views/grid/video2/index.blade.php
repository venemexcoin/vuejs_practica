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
    grid-gap: 20px;
    grid-template-columns: repeat(4, 100px);
    grid-auto-rows: repeat(3, 100px);
}

div {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: aquamarine;
}

@media(max-width: 600px){

    div:nth-child(10){
    background-color: purple;
    /* grid-column-start: 3;
    grid-column-end: 5; */
    grid-column: 3 / 5;
}

div:nth-child(6) {
    background-color: purple;
    grid-column: 2 /3;
    grid-row: 2 /4;
}

}



    </style>
</head>
<body>

</body>
</html>
<main>

    <div>1</div>
    <div>2</div>
    <div>3</div>
    <div>4</div>
    <div>5</div>
    <div>6</div>
    <div>7</div>
    <div>8</div>
    <div>9</div>
    <div>10</div>
</main>





