<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Display the home page
     */
    public function index()
    {
        return view('home_modern');
    }
}
