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

        .meal {
            width: 90vw;
            height: 90vh;
            margin: auto;
            text-align: center;
            padding: 10px;
            background-color: white;
        }

    </style>
</head>
<body>
<div class="meal">

    <div class="mealForm">

        <form method="POST" action="/" >
            <input type="text" name="meal" placeholder="Add a Meal"/>
            {{csrf_field()}}
            <input type="submit"/>
        </form>

    </div>

</div>
</body>
</html>
