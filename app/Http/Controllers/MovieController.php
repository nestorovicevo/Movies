<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $lastFive = Movie::orderBy('title','desc')->take(5)->get();

        return view('home', compact('movies', 'lastFive'));
    }

    public function get(int $id)
    {
        $movie = Movie::find($id);
        return view('movie', compact('movie'));
    }

   
}
