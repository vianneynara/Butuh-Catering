<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $orders = Order::where('user_id', $user->getAuthIdentifier())->paginate(10);

        return view('order.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $orders)
    {
        $this->checkOrderOwnership($orders);

        return view('order.show', ['order' => $orders]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $orders)
    {
        //
    }

    // Helper methods

    /**
     * Check whether the order belongs to the authenticated user.
     */
    private function checkOrderOwnership(Order $order)
    {
        $user = Auth::user();

        if ($user === null) {
            return response()->json([
                'message' => 'Authentication required',
            ], 403);
        }

        if ($order->user_id !== $user->getAuthIdentifier()) {
            return response()->json([
                'message' => 'Unauthorized',
            ], 403);
        }
    }
}
