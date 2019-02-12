<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('home', compact('movies'));
    }

    public function get(int $id)
    {
        $movie = Movie::find($id);
        return view('movie', compact('movie'));
    }

    public function getLastFive(int $id)
    {
        $lastFive = Movie::orderBy('id', 'desc')->take(5)->get();
        return view('home', compact('lastFive'));
    }
}
