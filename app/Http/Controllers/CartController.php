<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function addtocart(Request $request)
    {
        Cart::add($request->id, $request->name, $request->qty, $request->price, 0, ['num_adults' => $request->num_adults,'num_childrens' => $request->num_childrens,'period' => $request->period,'period' => $request->period]);
        return redirect('/cart')->with('success', 'your message,here');
    }

    public function cartdestroy(Request $request)
    {
        Cart::remove($request->rowId);
        return redirect()->back()->with('success', 'your message,here');
    }

    public function cart()
    {
        $cartitems=Cart::content();
        $total=Cart::total();
        return view('frontend.cart.cart-1', compact('cartitems','total'));
    }
}
