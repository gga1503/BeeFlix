<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
    public function genre($genre_id){
        $genres = Genre::with('movies')->where('id', $genre_id)->get();
//         return compact('genres');
        return view('kategori', compact('genres'));
    }
}
