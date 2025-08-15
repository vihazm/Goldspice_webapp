<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->paginate(10);//fetch all orders, order by latest and paginate to 10 results per page
        return view('admin.orders.index', compact('orders'));
    }
}
