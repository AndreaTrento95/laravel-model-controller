<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        // dd($movies);
        // dump($movies);

        // $movies1 = Movie::find(2);
        // dump($movies1);

        $data = [
            'movies' => $movies
        ];

        dump($data);
        return view('home', $data);
    }
}
