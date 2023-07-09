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
    <div class="conteiner">
      <a href="/dashboard/arsip/artikel" class="btn btn-primary">Artikel yang diarsipkan</a>
    </div>
    <div class="container">
      @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
          {{Session::get('message')}}
        </div>
      @endif
    </div>
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
              @foreach ($artikel as $item)
              <tr>
                <th scope="row"></th>
                <td><img src="{{asset('/storage/article/'. $item->thumbnail)}}" alt="" width="150"></td>
                <td>{{$item->heading}}</td>
                <td>
                  <a href="/dashboard/artikel/{{$item->id}}" class="btn btn-primary">Edit</a>
                  <form action="/dashboard/artikel/{{$item->id}}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  <form action="/dashboard/artikel/{{$item->id}}/arsip" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-success">Arsip</button>
                  </form>
                 
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>