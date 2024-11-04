<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('products')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();
        return view('orders.create', compact('products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'products' => 'required|array',
            'products.*.id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        $order = new Order();
        $order->description = $request->input('description');
        $order->save();

        foreach ($validated['products'] as $productData) {
            $order->products()->attach($productData['id'], [
                'quantity' => $productData['quantity'],
                'price' => Product::find($productData['id'])->price,
            ]);
        }

        return redirect()->route('orders.index')->with('status', 'Order created successfully!');
    }

    public function show($id)
    {
        $order = Order::with('products')->findOrFail($id);
        return view('orders.show', compact('order'));
    }

    public function edit($id)
    {
        $order = Order::with('products')->findOrFail($id);
        $products = Product::all();
        return view('orders.edit', compact('order', 'products'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $validated = $request->validate([
            'products' => 'required|array',
            'products.*.id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        $order->products()->detach();

        foreach ($validated['products'] as $productData) {
            $order->products()->attach($productData['id'], [
                'quantity' => $productData['quantity'],
                'price' => Product::find($productData['id'])->price,
            ]);
        }

        return redirect()->route('orders.index')->with('status', 'Order updated successfully!');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->products()->detach();
        $order->delete();

        return redirect()->route('orders.index')->with('status', 'Order deleted successfully!');
    }
}
