<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function privacy()
    {
        return view('landing.privacy');
    }

    public function contact()
    {
        return view('landing.contact');
    }
}
