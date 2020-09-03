<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{   


    public function index() {

        $movie = [
            'movies' => ['stand by me', 'matrix', 'provaci ancora sam'],
            'movies ancora da vedere' => ['robocop', 'terminator', 'ciaociao'],
        ];


        return view('movies', ['movie' => $movie]);
    }
}
