<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('items.spice')
            ->where('user_id', auth()->id())//fetches orders of only the current user
            ->latest()//newest first
            ->get();

        return view('orders.index', compact('orders'));
    }
}
