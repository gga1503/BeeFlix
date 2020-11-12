<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::where('photo');
        return view('detail', ['movie'=>$movies]);
    }

}
