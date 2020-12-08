<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function experience()
    {
        return view('experience');
    }

    public function skill()
    {
        return view('skill');
    }
}
