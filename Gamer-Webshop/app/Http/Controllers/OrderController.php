<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
{
    return response()->json(Order::with('product')->get());
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

    return response()->json($order, 201);
}

public function show(Order $order)
{
    return response()->json($order);
}

public function destroy(Order $order)
{
    $order->delete();

    return response()->json(null, 204);
}

}
