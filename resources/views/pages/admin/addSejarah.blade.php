<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    
    <h1>Halaman Tambah Sejarah</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="heading">Judul</label>
            <input type="text" name="heading" id="heading" class="form-control">
        </div>

        <div class="form-group">
            <label for="image">Select Thumbnail :</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="my-editor" name="content" class="form-control"></textarea>
        </div>
    
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>

</body>
 @include('ckeeditor/setting');
</html>