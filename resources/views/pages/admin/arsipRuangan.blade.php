<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($ruangan as $item)
              <tr>
                <th scope="row"></th>
                <td><img src="{{asset('/storage/photos/1/Thumbnails/'. $item->thumbnail)}}" alt="" width="150"></td>
                <td>{{$item->heading}}</td>
                <td><a href="/dashboard/ruangan/{{$item->id}}/restore" class="btn btn-primary">Publish</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>