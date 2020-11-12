<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<style>
    .card-group {
        display: flex;
        padding-top: 10px;
    }

    h3,
    .h3 {
        font-size: 1.575rem;
        padding-top: 15px;
    }

    .card-img-top {
        width: 100%;
        height: 30vw;
        object-fit: cover;

    }
</style>

<body>
    @include('header')

    <h3>DRAMA</h3>


    @foreach($genres[0]->movies as $movie)
    <div class="card-group">
        <div class="card">
            <img src="/{{$movie->photo}}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                <a href="/detail/{{$movie->id}}" class="btn btn-primary">LIHAT FILM</a>
            </div>
        </div>
    </div>
    @endforeach
</body>
</html>
