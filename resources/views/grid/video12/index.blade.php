<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        main {
            display:grid;
            height: 100vh;
            grid-gap: 10px;
            grid-template-columns: 200px 100px;
            grid-auto-columns: 300px;
            grid-auto-flow: column;
        }

        div {
            background-color: goldenrod;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
        }

        div:first-child,
        div:nth-child(2){
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
    <div>11</div>
    <div>12</div>
    <div>13</div>
    <div>14</div>
    <div>15</div>

</main>


</body>
</html>






