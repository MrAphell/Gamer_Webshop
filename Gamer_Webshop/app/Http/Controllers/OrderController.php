<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('product')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();
        return view('orders.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer',
        ]);

        $product = Product::find($request->product_id);
        $totalPrice = $product->price * $request->quantity;

        $order = Order::create([
            'product_id' => $request->product_id,
            'order_date' => now(),
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
        ]);

        return redirect()->route('orders.index')->with('success', 'Rendelés sikeresen létrehozva!');
    }

    public function show(Order $order)
    {
        return response()->json($order);
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Rendelés sikeresen törölve!');
    }
}
