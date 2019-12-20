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
    grid-gap: 10px 30px;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(3, 1fr);

    /*Implicit grit*/
    grid-auto-rows: 1fr;

}

div {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: purple;
    color: white;
}

    </style>
</head>
<body>

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
</body>
</html>





