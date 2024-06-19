<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function indexAdmin()
    {
        return view('admin.index');
    }

    public function homepage()
    {
        return view('homepage');
    }
}
