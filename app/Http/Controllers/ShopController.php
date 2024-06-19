<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = Auth::user();

        // Check whether the shop already exists with the same user
        $existingShop = Shop::where('user_id', $user->getAuthIdentifier())->first();

        if ($existingShop) {
            return response()->json([
                'message' => 'Shop already exists for the user',
            ], 400);
        }

        return view('shop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
        ]);

        $user = Auth::user();

        // Check whether the shop already exists with the same user
        $existingShop = Shop::where('user_id', $user->getAuthIdentifier())->first();

        if ($existingShop) {
            return response()->json([
                'message' => 'Shop already exists for the user',
            ], 400);
        }

        $shop = Shop::create([
            'name' => $validated['name'],
            'address' => '',
            'status' => 'open',
            'schedules_data' => null,
            'user_id' => $user->getAuthIdentifier(),
        ]);

        return response()->json([
            'message' => 'Shop created successfully',
            'shop' => $shop,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop)
    {
        if (!$shop) {
            return response()->json([
                'message' => 'Shop not found',
            ], 404);
        }

        return view('shop.show', ['shop' => $shop]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop)
    {
        $this->checkOwnership($shop);

        return view('shop.edit', ['shop' => $shop]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shop $shop)
    {
        $this->checkOwnership($shop);

        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'address' => 'required|string|max:100',
            'status' => 'required|string|in:open,closed',
            'schedules_data' => 'nullable|json',
        ]);

        $shop->update($validated);

        return response()->json([
            'message' => 'Shop updated successfully',
            'shop' => $shop,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop)
    {
        $this->checkOwnership($shop);

        $shop->delete();

        return response()->json([
            'message' => 'Shop deleted successfully',
        ], 200);
    }

    // Helper methods

    /**
     * Check for shop ownership.
     */
    private function checkOwnership(Shop $shop) {
        $user = Auth::user();

        if ($shop->user_id !== $user->getAuthIdentifier()) {
            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }
    }

    // Resource Finders

    /**
     * Get the shop by the given ID.
     */
    public function getShopById(int $shopId): Shop
    {
        return Shop::findOrFail($shopId);
    }

    /**
     * Get shops that contains the given keyword of name.
     */
    public function getShopsByName(string $keyword): array
    {
        return Shop::where('name', 'like', "%$keyword%")->get();
    }
}
