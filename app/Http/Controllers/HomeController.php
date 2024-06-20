<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

