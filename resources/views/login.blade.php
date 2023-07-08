<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        @if (Session::has('status'))
            <p style="color: brown">{{Session::get('message')}}</p>
        @endif
    </div>
    <form action="" method="POST">
        @csrf
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</body>
</html>