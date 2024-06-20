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

        $product = Product::create(['shop_id' => $shop->getKey()] + $validated);

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

    // PATCH requests

    /**
     * Change the name of the product.
     */
    public function changeName(Request $request, Shop $shop, Product $product)
    {
        ShopController::checkShopOwnership($shop);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
        ]);

        $product->update($validated);

        return response()->json([
            'message' => 'Product name updated successfully',
            'product' => $product,
        ], 200);
    }

    /**
     * Change the description of the product.
     */
    public function changeDescription(Request $request, Shop $shop, Product $product)
    {
        ShopController::checkShopOwnership($shop);

        $validated = $request->validate([
            'description' => ['required', 'string', 'max:255'],
        ]);

        $product->update($validated);

        return response()->json([
            'message' => 'Product description updated successfully',
            'product' => $product,
        ], 200);
    }

    /**
     * Change the price of the product.
     */
    public function changePrice(Request $request, Shop $shop, Product $product)
    {
        ShopController::checkShopOwnership($shop);

        $validated = $request->validate([
            'price' => ['required', 'numeric'],
        ]);

        $product->update($validated);

        return response()->json([
            'message' => 'Product price updated successfully',
            'product' => $product,
        ], 200);
    }

    /**
     * Change the min order of the product.
     */
    public function changeMinOrder(Request $request, Shop $shop, Product $product)
    {
        ShopController::checkShopOwnership($shop);

        // min_order must be between 1 and 3 digits and not be above max_order
        $validated = $request->validate([
            'min_order' => ['required', 'integer', 'digits_between:1,3', 'lt:max_order'],
        ]);

        $product->update($validated);

        return response()->json([
            'message' => 'Product min order updated successfully',
            'product' => $product,
        ], 200);
    }

    /**
     * Change the max order of the product.
     */
    public function changeMaxOrder(Request $request, Shop $shop, Product $product)
    {
        ShopController::checkShopOwnership($shop);

        // max_order must be between 1 and 3 digits and not be below min_order
        $validated = $request->validate([
            'max_order' => ['required', 'integer', 'digits_between:1,3', 'gt:min_order'],
        ]);

        $product->update($validated);

        return response()->json([
            'message' => 'Product max order updated successfully',
            'product' => $product,
        ], 200);
    }
}
