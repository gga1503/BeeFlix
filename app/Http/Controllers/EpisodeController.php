<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Genre;
use App\Movie;
use Illuminate\Http\Request;


class EpisodeController extends Controller
{
//

    public function detail($movie_id)
    {
        $movie = Movie::findOrFail($movie_id);
        $episodes = Episode::where('movie_id', $movie_id)->paginate(3);
        $genre = Genre::findOrFail($movie->genre_id);

//        return compact('movie', 'episodes', 'genre');
        return view('detail', compact('movie', 'episodes', 'genre'));
    }

    public function all()
    {
        return Episode::all();
    }
}
