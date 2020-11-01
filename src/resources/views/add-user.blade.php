<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    @if (isset($user))
        <form action="{{ route('edit-user', ['id' => $user->id])}}" method="POST">
        @method('PATCH')
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$user->name}}"/>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{$user->email}}">
        <input type="submit" value="Edit">
    @else
        <form action="{{ route('create-user')}}" method="POST">
        @method('POST')
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name"/>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="Register">
    @endif
    </form>
</body>
</html>
