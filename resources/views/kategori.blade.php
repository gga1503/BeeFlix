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

    <div class="card-group">
        <div class="card">
            <img src="./image/itsok.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">It's Okay to Not Be Okay</h5>
                <a href="{{ route('/detail') }}" class="btn btn-primary">LIHAT FILM</a>
            </div>
        </div>
        <div class="card">
            <img src="./image/Goblin.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Goblin</h5>
                <a href="{{ route('/detail') }}" class="btn btn-primary">LIHAT FILM</a>
            </div>
        </div>
        <div class="card">
            <img src="./image/CLOY.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Crash Landing On You</h5>
                <a href="{{ route('/detail') }}" class="btn btn-primary">LIHAT FILM</a>
            </div>
        </div>
        <div class="card">
            <img src="./image/thefierypriest.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">The Fiery Priest (2019)</h5>
                <a href="{{ route('/detail') }}" class="btn btn-primary">LIHAT FILM</a>
            </div>
        </div>
    </div>
</body>
</html>