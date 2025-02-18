<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return response()->json($orders);
    }

    public function show(Order $order)
    {
        return response()->json($order);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $order = Order::createOrder($data);
        return response()->json($order, 201);
    }

    public function update(Request $request, Order $order)
    {
        $order->updateStatus($request->input('status'))
            ->updatePaymentStatus($request->input('payment_status'))
            ->updateShippingStatus($request->input('shipping_status'));

        return response()->json($order);
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return response()->json(null, 204);
    }

    public function cancel(Order $order)
    {
        $order->cancel();
        return response()->json($order);
    }
}
