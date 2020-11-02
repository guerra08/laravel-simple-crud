<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user-success.css') }}">
    <title>Success!</title>
</head>
<body>
    <div class="content">
        <h1>Added a new user:</h1>
        <h2>ID: {{$user->id}}</h2>
        <h2>Name: {{$user->name}}</h2>
        <h2>Email: {{$user->email}}</h2>
    </div>
</body>
</html>
