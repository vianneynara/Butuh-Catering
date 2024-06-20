<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderItemController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'quantity' => ['required', 'integer', 'min:1'],
            'notes' => ['string', 'max:255'],
            'product_id' => ['required', 'integer', 'exists:products,product_id'],
            'order_id' => ['required', 'integer', 'exists:orders,order_id']
        ]);

        $orderItem = OrderItem::create($validated);

        return response()->json([
            'message' => 'Order item created successfully',
            'order_item_id' => $orderItem->getKey()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderItem $orderItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderItem $orderItem)
    {
        $this->checkOrderItemOwnership($orderItem);

        $orderItem->delete();
    }

    // Getter methods

    /**
     * Get the order item in JSON format
     */
    public function getOrderItemJson(OrderItem $orderItem)
    {
        $this->checkOrderItemOwnership($orderItem);

        return response()->json($orderItem);
    }

    // Helper methods

    /**
     * Check whether the order item belongs to the authenticated user
     */
    public function checkOrderItemOwnership(OrderItem $orderItem)
    {
        $user = Auth::user();

        if ($user === null) {
            return response()->json([
                'message' => 'Authentication required',
            ], 403);
        }

        // Get the user_id from the order_id of the order item
        $order = Order::find($orderItem->value('order_id'));

        if ($order->value('user_id') !== $user->getAuthIdentifier()) {
            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }
    }

}
