<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderCartController extends Controller
{
    public function add(Request $request)
    {
        try {
            // Generate order ID
            $orderId = time() . rand(1000, 9999);

            // Create new order
            $order = new Order();
            $order->id = $orderId;
            $order->items = $request->items;
            $order->total = $request->total;
            $order->user_id = auth()->id();
            $order->save();

            return response()->json([
                'success' => true,
                'message' => 'Order successfully',
                'order_id' => $orderId
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to order: ' . $e->getMessage()
            ], 500);
        }
    }
}