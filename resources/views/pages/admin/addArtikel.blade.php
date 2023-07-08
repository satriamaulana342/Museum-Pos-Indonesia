<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    
    <h1>Halaman Tambah Artikel</h1>
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
            <select name="category" id="option">
                <option value="1">Sejarah</option>
                <option value="2">Otomotif</option>
                <option value="3">Teknologi</option>
            </select>
        </div>

        <div class="form-group">
            <label for="image">Pilih Gambar:</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" rows="8" cols="40"></textarea>
        </div>
    
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>

</body>
</html>