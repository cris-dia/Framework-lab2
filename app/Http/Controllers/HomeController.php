<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $lastTask = ['title' => 'Ultima sarcină creată', 'description' => 'Detalii'];
        return view('home', ['lastTask' => $lastTask]);
    }


    public function about()
    {
        return view('about');
    }
}
