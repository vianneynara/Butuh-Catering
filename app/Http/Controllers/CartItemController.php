<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $cartItems = CartItem::where('user_id', $user->getAuthIdentifier())->paginate(10);

        return view('cart_item.index', ['cartItems' => $cartItems]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($productId)
    {
        $user = Auth::user();

        $existingCartItem = CartItem::where('user_id', $user->getAuthIdentifier())
            ->where('product_id', $productId)
            ->first();
        $initialQuantity = 1;
        if ($existingCartItem) {
            $initialQuantity = $existingCartItem->value('quantity');
        }

        return view('cart_item.create', ['initialQuantity' => $initialQuantity]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Product $product, $quantity)
    {
        $user = Auth::user();

        $existingCartItem = CartItem::where('user_id', $user->getAuthIdentifier())
            ->where('product_id', $product->getKey())
            ->first();
        
        // Check whether the quantity summation exceeds the max_order
        $sumQty = $quantity;
        if ($existingCartItem) {
            $sumQty += $existingCartItem->value('quantity');
        }
        if ($sumQty > $product->value('max_order')) {
            return response()->json([
                'message' => 'Quantity exceeds the maximum order limit',
            ], 400);
        }

        if ($existingCartItem) {
            $existingCartItem->update([
                'quantity' => $quantity,
            ]);
        } else {
            CartItem::create([
                'user_id' => $user->getAuthIdentifier(),
                'product_id' => $product->getKey(),
                'quantity' => $quantity,
            ]);
        }

        return response()->json([
            'message' => 'Cart item created successfully',
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(CartItem $cartItem)
    {
        $this->checkCartItemOwnership($cartItem);

        return view('cart_item.show', ['cartItem' => $cartItem]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CartItem $cartItem)
    {
        $this->checkCartItemOwnership($cartItem);

        return view('cart_item.edit', ['cartItem' => $cartItem]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CartItem $cartItem)
    {
        $this->checkCartItemOwnership($cartItem);
        $maxOrder = $cartItem->product->value('max_order');

        $validated = $request->validate([
            'quantity' => ['required', 'integer', 'min:1', 'max:' . $maxOrder],
        ]);

        $cartItem->update([
            'quantity' => $validated['quantity'],
        ]);

        return response()->json([
            'message' => 'Cart item updated successfully',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartItem $cartItem)
    {
        $this->checkCartItemOwnership($cartItem);

        $cartItem->delete();

        return response()->json([
            'message' => 'Cart item deleted successfully',
        ], 200);
    }

    // Resource Finders
    
    /**
     * Get the quantity of the specified resource.
     */
    public function getQuantity(CartItem $cartItem)
    {
        $this->checkCartItemOwnership($cartItem);

        return response()->json([
            'quantity' => $cartItem->value('quantity'),
        ], 200);
    }

    // PATCH requests

    /**
     * Change the quantity of the specified resource.
     */
    public function changeQuantity(CartItem $cartItem, $quantity)
    {
        $this->checkCartItemOwnership($cartItem);
        $maxOrder = $cartItem->product->value('max_order');

        if ($quantity < 1 || $quantity > $maxOrder) {
            return response()->json([
                'message' => 'Invalid quantity',
            ], 400);
        }

        $cartItem->update([
            'quantity' => $quantity,
        ]);

        return response()->json([
            'message' => 'Cart item updated successfully',
        ], 200);
    }

    // Helper methods

    private function checkCartItemOwnership(CartItem $cartItem)
    {
        $user = Auth::user();

        if ($user === null) {
            return response()->json([
                'message' => 'Authentication required',
            ], 403);
        }

        if ($cartItem->user_id !== $user->getAuthIdentifier()) {
            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }
    }
}
