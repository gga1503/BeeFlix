<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body>
    @include('header')

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="{{$movie->photo}}" alt="..." class="float-left">
            </div>
            <div class="col-sm">
                <h2>{{$movie->title}}</h2>
                <p class="text-justify">{{$movie->description}}</p>
                <p class="text-justify">kategori: </p> <a href="" class="text-decoration-none">{{$genre->name}}</a>
            </div>
            <div class="col-sm">
                <h5>EPISODE</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">episode</th>
                            <th scope="col">judul</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($episodes as $e)
                        <tr>
                            <td>{{$e->episode}}</td>
                            <td>{{$e->title}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $episodes->links() }}

            </div>
        </div>
    </div>









</body>

</html>