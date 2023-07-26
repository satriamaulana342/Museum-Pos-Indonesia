<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pos Indonesia Dashboard</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
<!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>
<body>
    <div>
        @if (Session::has('status'))
            <p style="color: brown">{{Session::get('message')}}</p>
        @endif
    </div>
    <h1 style="text-align: center">Pos Indonesia Dashboard<br>
    <img src="{{ url('asset/logo.webp') }}" style="margin-top: 30px; width:150px"/>
    <br>
    </h1>
    <div class="form-container">
        <form action="" method="POST">
        @csrf
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email"><br>

            <label for="password">password</label><br>
            <input type="password" name="password" id="password"><br>

            <button type="submit" class="btn btn-primary" style="margin-top: 10px">Login</button>
        </form>
    </div>

</body>
</html>