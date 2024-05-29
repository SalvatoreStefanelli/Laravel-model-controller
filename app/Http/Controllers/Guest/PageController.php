<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index () {

        $movies = Movie::all();
        // dd($movies);

        return view('guests/welcome', compact('movies'));
    }

    public function movies () {

        // $movies = Movie::all();
        // $movies = Movie::where('title', 'Gravity')->get();
        $movies = Movie::where('vote', '>', 8)->get();
        dd($movies);

        return view('guests/movies', compact('movies'));
    }

    public function characters () {

        $movies = Movie::all();
        // dd($movies);

        return view('guests/characters', compact('movies'));
    }

}
