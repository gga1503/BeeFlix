<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<style>
    .card-img,.foto{
        width: 300px;
        padding-top: 7px;
    }
</style>

<body>
    @include('header')

    <div class="container">
        <div class="row">
            <div class="col-foto">
                <img src="{{$movie->photo}}" alt="foto" class="card-img">
            </div>
            <div class="col-sm">
                <h2>{{$movie->title}}</h2>
                <p class="text-justify">{{$movie->description}}</p>
                <p class="text-justify">kategori: </p> <a href="/kategori/{{$genre->id}}" class="text-decoration-none">{{$genre->name}}</a>
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
