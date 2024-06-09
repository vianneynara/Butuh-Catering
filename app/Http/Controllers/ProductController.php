<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Mencari produk berdasarkan nama produk saja
        $products = Product::where('namaProduk', 'like', "%$query%")->get();

        return view('search-results', compact('products'));
    }
}
