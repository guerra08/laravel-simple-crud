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
    <a href="{{ route('get-create-user-page') }}"><h2>Add an user</h2></a>
    <h2>Registered users: </h2>
    @foreach($users as $user)
        <p>{{$user->name}}</p>
        <p>{{$user->email}}</p>
        <form method="get" action="{{ route('get-edit-user-page', ['id'=>$user->id]) }}">
            <button type="submit">Edit</button>
        </form>
        <form method="post" action="{{ route('delete-user', ['id'=>$user->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <hr/>
    @endforeach
</body>
</html>
