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
                <img src="..." alt="..." class="float-left">
            </div>
            <div class="col-sm">
            @foreach($movie as $m)
                <h5>$m->title</h5>
                <p class="text-justify">$m->description</p>
                <p class="text-justify">kategori: </p> <a href="#" class="text-decoration-none"></a>
            @endforeach
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
                        @foreach($detail as $d)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$d->episodes}}</td>
                            <td>{{$d->title}}</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>{{$d->episodes}}</td>
                            <td>{{$d->title}}</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>{{$d->episodes}}</td>
                            <td>{{$d->title}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>









</body>

</html>