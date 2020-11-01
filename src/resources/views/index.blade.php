<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>Welcome!</h1>
    <h2>Registered users: </h2>
    @foreach($users as $user)
        <p>{{$user->name}}</p>
        <p>{{$user->email}}</p>
        <a href="/users/delete/{{$user->id}}">Delete</a>
        <hr/>
    @endforeach
</body>
</html>
