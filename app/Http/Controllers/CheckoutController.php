<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        // Get current cart items
        $cartItems = Cart::where('user_id', auth()->id())->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }
        //calculates total if items exist
        $grandTotal = $cartItems->sum(function($item) {
            return $item->spice->price * $item->quantity;
        });

        return view('checkout.index', compact('cartItems', 'grandTotal'));
    }

    public function process(Request $request)
    {
        $request->validate([
            'card_number' => 'required',
            'expiry' => 'required',
            'cvv' => 'required',
        ]);

        $cartItems = Cart::with('spice')//gets the cart items with their details to the user
            ->where('user_id', auth()->id())
            ->get();

        if ($cartItems->isEmpty()) {//returns error msg if empty
            return redirect()->route('cart.index')->with('error', 'Cart is empty');
        }

        $grandTotal = $cartItems->sum(fn($item) => $item->spice->price * $item->quantity);

        // Creates order
        $order = Order::create([
            'user_id' => auth()->id(),
            'total' => $grandTotal,
            'status' => 'paid',
        ]);

        // Create order items
        foreach ($cartItems as $item) {//looping through cart items for each spice in order
            OrderItem::create([
                'order_id' => $order->id,
                'spice_id' => $item->spice_id,
                'quantity' => $item->quantity,
                'price' => $item->spice->price,
            ]);
        }

        // Clear cart for the user
        Cart::where('user_id', auth()->id())->delete();

        return redirect()->route('orders.index')->with('success', 'Order placed successfully!');
    }
    

    
}
