<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mealer</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        body {
            background-color: lightgray;
        }

        .food {
            width: 90vw;
            height: 90vh;
            text-align: center;
            padding: 10px;
            background-color: white;
            display: table-cell;
            vertical-align: middle;
        }

    </style>
</head>
<body>
<div class="food">

    <div class="foodForm">

        <form method="post">
            <input type="text" name="food" placeholder="Food" required/><br><br>
            <input type="number" min="0" name="carb" placeholder="Carb" required/><br><br>
            <input type="number" min="0" name="fat" placeholder="Fat" required/><br><br>
            <input type="number" min="0" name="protein" placeholder="Protein" required/><br><br>
            <input type="submit"/>
        </form>

    </div>

</div>
</body>
</html>
