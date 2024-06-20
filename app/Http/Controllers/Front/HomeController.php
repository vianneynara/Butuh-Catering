<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // Logic for homepage
        return view('home');
    }

    public function indexAdmin()
    {
        // Logic for admin homepage
        return view('admin');
    }

    public function welcome()
    {
        // Logic for welcome page
        return view('welcome');
    }

    public function homepage()
    {
        // Logic for homepage
        return view('homepage');
    }
}

