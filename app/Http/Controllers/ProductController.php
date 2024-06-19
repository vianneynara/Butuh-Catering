<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);

        return view('product.index', ['products' => $products]);
    }

    /**
     * Display a listing of the resource.
     */
    public function shopProducts(Shop $shop)
    {
        $products = $shop->products()->paginate(10);

        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Shop $shop)
    {
        ShopController::checkShopOwnership($shop);

        return view('product.create', ['shop' => $shop]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Shop $shop)
    {
        ShopController::checkShopOwnership($shop);

        $validated = $request->validate([
            'name'          => ['required', 'string', 'max:50'],
            'description'   => ['required', 'string', 'max:255'],
            'min_order'     => ['required', 'integer', 'digits_between:1,3'],
            'max_order'     => ['required', 'integer', 'digits_between:1,3'],
            'price'         => ['required', 'numeric'],
            'image_url'     => ['required', 'url'],
        ]);

        $product = Product::create([
            'shop_id' => $shop->shop_id,
            'name' => $validated['name'],
            'description' => $validated['description'],
            'min_order' => $validated['min_order'],
            'max_order' => $validated['max_order'],
            'price' => $validated['price'],
            'image_url' => $validated['image_url'],
        ]);

        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, Shop $shop)
    {
        ShopController::checkShopOwnership($shop);

        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shop $shop, Product $product)
    {
        ShopController::checkShopOwnership($shop);

        $validated = $request->validate([
            'name'          => ['required', 'string', 'max:50'],
            'description'   => ['required', 'string', 'max:255'],
            'min_order'     => ['required', 'integer', 'digits_between:1,3'],
            'max_order'     => ['required', 'integer', 'digits_between:1,3'],
            'price'         => ['required', 'numeric'],
            'image_url'     => ['required', 'url'],
        ]);

        $product->update($validated);

        return response()->json([
            'message' => 'Product updated successfully',
            'product' => $product,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop, Product $product)
    {
        ShopController::checkShopOwnership($shop);

        $product->delete();

        return response()->json([
            'message' => 'Product deleted successfully',
        ], 200);
    }
}
