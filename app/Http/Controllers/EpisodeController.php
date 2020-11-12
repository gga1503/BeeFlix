<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Genre;
use App\Movie;
use Illuminate\Http\Request;


class EpisodeController extends Controller
{
    public function index($id)
    {
        $movie = Movie::findOrFail($id);
        $episodes = Episode::where('movie_id',$id)->paginate(3);
        $genre = Genre::findOrFail($movie->genre_id);
        return view('detail', compact('movie','episodes','genre'));
        
    }

    public function show ($id)
    {
        return view();           
    }
}
