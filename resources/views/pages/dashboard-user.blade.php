<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Hi, {{Auth::user()->name}}</p>
    <form action="{{Route('logout')}}" method="GET">
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>
</body>
</html>