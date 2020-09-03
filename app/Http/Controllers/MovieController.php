<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{   

    public function index() {

        // $movie = [
        //     'movies' => ['stand by me', 'matrix', 'provaci ancora sam'],
        //     'movies ancora da vedere' => ['robocop', 'terminator', ],
        // ];

        $movie = Movie::all();
        

        return view('movies', ['movie' => $movie]);
    }
}
 