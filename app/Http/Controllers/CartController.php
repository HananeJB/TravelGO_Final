<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function addtocart(Request $request)
    {
        Cart::add(
            $request->id,
            $request->title,
            $request->qty,
            $request->price,
            0,
            [
                'startdate' => $request->date,
                'taxrate' => 20,
            ]);
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
        $cartsum=['total'=>Cart::total(),'tax'=>Cart::tax(),'subtotal'=>Cart::subtotal()];
        return view('frontend.cart.cart-1', compact('cartitems','cartsum'));
    }
    public function checkout()
    {
        $cartitems=Cart::content();
        $cartsum=['total'=>Cart::total(),'tax'=>Cart::tax(),'subtotal'=>Cart::subtotal()];
        return view('frontend.cart.cart-2', compact('cartitems','cartsum'));
    }
    public function validation()
    {
        $cartsum=['total'=>Cart::total(),'tax'=>Cart::tax(),'subtotal'=>Cart::subtotal()];
        return view('frontend.cart.cart-3', compact('cartsum'));
    }
}
