<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity 2</title>
</head>
<body>
    <h1>Login</h1>
    <form action="dologin" method="post">
        @csrf
        <input type="text" name="username">
        <input type="password" name="password">
        <button type="submit">Submit</button>
    </form>

</body>
</html>