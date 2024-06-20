<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return view('product.create', ['shop' => $shop->attributesToArray()]);
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
        return view('product.show', [
            'product' => $product->attributesToArray(),
            'shop' => Shop::find($product->shop_id)->first()->attributesToArray(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, Shop $shop)
    {
        ShopController::checkShopOwnership($shop);

        return view('product.edit', ['product' => $product->attributesToArray()]);
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

    // Getters

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Mencari produk berdasarkan nama produk saja
        $products = Product::where('name', 'like', "%$query%")->get();

        return view('search-results', compact('products'));
    }

    // PATCH requests

    /**
     * Change the name of the product.
     */
    public function changeName(Request $request, Product $product)
    {
        $this->checkAuthHasShopOfProduct($product);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
        ]);

        $product->update($validated);

        return response()->json([
            'message' => 'Product name updated successfully',
            'data' => $product,
        ], 200);
    }

    /**
     * Change the description of the product.
     */
    public function changeDescription(Request $request, Product $product)
    {
        $this->checkAuthHasShopOfProduct($product);

        $validated = $request->validate([
            'description' => ['required', 'string', 'max:255'],
        ]);

        $product->update($validated);

        return response()->json(
            [
                'message' => 'Product price updated successfully',
                'data' => $product,
            ],
            200,
            ['Content-Type' => 'application/json']
        );
    }

    /**
     * Change the price of the product.
     */
    public function changePrice(Request $request, Product $product)
    {
        $this->checkAuthHasShopOfProduct($product);

        $validated = $request->validate([
            'price' => ['required', 'numeric'],
        ]);

        $product->update($validated);

        return response()->json(
            [
                'message' => 'Product price updated successfully',
                'data' => $product,
            ],
            200,
            ['Content-Type' => 'application/json']
        );
    }

    /**
     * Change the min order of the product.
     */
    public function changeMinOrder(Request $request, Product $product)
    {
        $this->checkAuthHasShopOfProduct($product);

        // min_order must be between 1 and 3 digits and not be above max_order
        $validated = $request->validate([
            'min_order' => ['required', 'integer', 'digits_between:1,3', 'lt:max_order'],
        ]);

        $product->update($validated);

        return response()->json(
            [
                'message' => 'Product price updated successfully',
                'data' => $product,
            ],
            200,
            ['Content-Type' => 'application/json']
        );
    }

    /**
     * Change the max order of the product.
     */
    public function changeMaxOrder(Request $request, Product $product)
    {
        $this->checkAuthHasShopOfProduct($product);

        // max_order must be between 1 and 3 digits and not be below min_order
        $validated = $request->validate([
            'max_order' => ['required', 'integer', 'digits_between:1,3', 'gt:min_order'],
        ]);

        $product->update($validated);

        return response()->json(
            [
                'message' => 'Product price updated successfully',
                'data' => $product,
            ],
            200,
            ['Content-Type' => 'application/json']
        );
    }

    // Helper methods

    /**
     * Check if the user is the owner of the shop.
     */
    static function checkAuthHasShopOfProduct(Product $product)
    {
        $user = Auth::user();

        $userShop = Shop::where('user_id', $user->getAuthIdentifier())->first();

        if ($userShop === null) {
            return response()->json([
                'message' => 'User is not the owner of a shop',
            ], 403);
        } else {
            if ($userShop->getKey() !== $product->getKey()) {
                return response()->json([
                    'message' => 'User is not the owner of the shop of the product',
                ], 403);
            }
        }
    }

    // API requests

    /**
     * Get all products.
     */
    public function getAllProducts()
    {
        $data = Product::paginate(10);

        return response()->json(
            [
                $data,
            ],
            200,
            ['Content-Type' => 'application/json']
        );
    }

    /**
     * Get specific product.
     */
    public function getProduct(Product $product)
    {
        return response()->json(
            [
                'data' => $product,
            ],
            200,
            ['Content-Type' => 'application/json']
        );
    }
}
