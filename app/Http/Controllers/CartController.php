<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $request->validate([//checks if that spice exists in the table
            'spice_id' => 'required|exists:spices,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = Cart::where('user_id', auth()->id())//checks if the spice is in user's cart
                        ->where('spice_id', $request->spice_id)
                        ->first();

        if ($cartItem) {//increase quantity and save if exists
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            Cart::create([//if not create new cart entity
                'user_id' => auth()->id(),
                'spice_id' => $request->spice_id,
                'quantity' => $request->quantity,
            ]);
        }

        return redirect()->route('cart.index');
    }

    public function index()
    {
        $cartItems = Cart::with('spice')//gets all cart items for the user
                         ->where('user_id', auth()->id())
                         ->get();

        return view('cart.index', compact('cartItems'));//displays them in teh view
    }

    public function remove($id)
    {
         $cartItem = Cart::where('id', $id)//find cart item for this user by id
                    ->where('user_id', auth()->id())
                    ->firstOrFail();

    $cartItem->delete();

    return redirect()->route('cart.index')->with('success', 'Item removed from cart.');
    }
}
