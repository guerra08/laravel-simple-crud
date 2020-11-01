<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
</head>
<body>
    <form action="/users/signup" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name"/>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="Register">
    </form>
</body>
</html>