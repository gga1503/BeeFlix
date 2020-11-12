<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Beeflix</title>
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
                <a href="/detail/1" class="btn btn-primary">LIHAT FILM</a>
            </div>
        </div>
        <div class="card">
            <img src="./image/Goblin.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Goblin</h5>
                <a href="/detail/2" class="btn btn-primary">LIHAT FILM</a>
            </div>
        </div>
        <div class="card">
            <img src="./image/CLOY.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Crash Landing On You</h5>
                <a href="/detail/3" class="btn btn-primary">LIHAT FILM</a>
            </div>
        </div>
        <div class="card">
            <img src="./image/thefierypriest.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">The Fiery Priest (2019)</h5>
                <a href="/detail/4" class="btn btn-primary">LIHAT FILM</a>
            </div>
        </div>
    </div>

    <h3>KIDS</h3>
    <div class="card-group">
        <div class="card">
            <img src="./image/avatar.jpg" class="card-img-top" alt="gambaravatar">
            <div class="card-body">
                <h5 class="card-title">Avatar: The Last Airbender</h5>
                <a href="/detail/5" class="btn btn-primary">LIHAT FILM</a>
            </div>
        </div>
        <div class="card">
            <img src="./image/naruto.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Naruto</h5>
                <a href="/detail/6" class="btn btn-primary">LIHAT FILM</a>
            </div>
        </div>
        <div class="card">
            <img src="./image/spongebob.jpeg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">SpongeBob SquarePants</h5>
                <a href="/detail/7" class="btn btn-primary">LIHAT FILM</a>
            </div>
        </div>
        <div class="card">
            <img src="./image/spiderman.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Spider-Man</h5>
                <a href="/detail/8" class="btn btn-primary">LIHAT FILM</a>
            </div>
        </div>
    </div>

    <h3>TV SHOW</h3>
    <div class="card-group">
        <div class="card">
            <img src="./image/Twogether.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Twogether</h5>
                <a href="/detail/9" class="btn btn-primary">LIHAT FILM</a>
            </div>
        </div>
        <div class="card">
            <img src="./image/Rm.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Running Man</h5>
                <a href="/detail/10" class="btn btn-primary">LIHAT FILM</a>
            </div>
        </div>
        <div class="card">
            <img src="./image/tros.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">The Return of Superman</h5>
                <a href="/detail/11" class="btn btn-primary">LIHAT FILM</a>
            </div>
        </div>
        <div class="card">
            <img src="./image/twodays.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">2 Days & 1 Night</h5>
                <a href="/detail/12" class="btn btn-primary">LIHAT FILM</a>
            </div>
        </div>
    </div>
</body>

</html>