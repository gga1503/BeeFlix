<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
//     $movie = Movie::findOrFail($movie_id);
//     $episodes = Episode::where('movie_id', $movie_id)->paginate(3);
//     $genre = Genre::findOrFail($movie->genre_id);

// //        return compact('movie', 'episodes', 'genre');
//     return view('detail', compact('movie', 'episodes', 'genre'));

    public function genre($genre_id){
        $genres = Genre::with('movies')->where('id', $genre_id)->get();
        // return view('kategori', 'movies');
        return view('kategori', compact('genres'));
    }
}
