<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Mengambil semua produk dari database

        return view('homepage', [
            'products' => $products
        ]);
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

