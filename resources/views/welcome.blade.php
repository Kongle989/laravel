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

        .container {
            width: 90vw;
            text-align: center;
            padding: 10px;
            background-color: white;
            display: table-cell;
            vertical-align: middle;
        }

        .create_account {
            margin-top: 50px;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="main">
        <h1>Meal Tracker</h1>
    </div>
    Please login to input a meal.
    <br><br>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required/>
        <br><br>
        <input type="password" name="password" placeholder="Password" required/>
        <br><br>
        <input type="submit" value="Login"/>
    </form>
    <div class="create_account">

        <input type="button" value="Create Account"/>

    </div>


</div>
</body>
</html>
