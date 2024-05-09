<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;


class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('guests.welcome', compact('movies'));
    }

    public function about()
    {
        return view('guests.about');
    }

    public function contacts()
    {
        return view('guests.contacts');
    }
}
