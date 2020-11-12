<link rel="stylesheet" href="{{asset('css/app.css')}}">
<style>
    body{
        padding: 10px;
    }
</style>


<h1>BeeFlix</h1>


<div class="buttongroup" role="group" aria-label="Basic example">
    <button onclick="window.history.back()" type="button" class="btn btn-secondary">KEMBALI</button>
    
    <a href=" {{ route('/home') }}">
    <button type="button" class="btn btn-secondary">LIHAT SEMUA FILM</button>
    </a>
</div>