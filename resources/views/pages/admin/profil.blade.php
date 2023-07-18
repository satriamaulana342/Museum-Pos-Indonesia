<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile | Museum POS</title>
    <style>
        body {
            text-align: center;
            width: 50%;
            margin: 0 auto;
        }
        
        .form-group {
            text-align: left;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        
        img {
            display: block;
            margin: 0 auto;
        }
        
        button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Profil</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif
    <form method="POST" action="/dashboard/profil/edit" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="heading">Heading</label>
            <input type="text" name="heading" id="heading" class="form-control" value="{{$profil->heading}}">
        </div>

        <div class="form-group">
            <label for="image">Pilih Gambar:</label>
            <img src="{{asset('/storage/photos/1/Profile/'. $profil->image)}}" alt="" width="150">
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="my-editor" name="content" class="form-control">{{$profil->content}}</textarea>
        </div>
    
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</body>
@include('ckeeditor/setting');
</html>
