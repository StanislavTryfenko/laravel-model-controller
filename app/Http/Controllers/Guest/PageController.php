<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        
        dd($movies);

        return view('guests.welcome')->name('guests.home');
    }

    public function about()
    {
        return view('guests.about')->name('guests.about');
    }

    public function contacts()
    {
        return view('guests.contacts')->name('guests.contacts');
    }
}
