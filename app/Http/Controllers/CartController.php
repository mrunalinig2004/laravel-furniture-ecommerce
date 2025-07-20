<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Add to Cart
    public function addToCart(Request $request)
    {
        // Product info comes from hidden form fields
        $id = $request->input('id');
        $name = $request->input('name');
        $price = $request->input('price');

        $cart = session()->get('cart', []);

        // If product already in cart, increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            // Add new product to cart
            $cart[$id] = [
                "id" => $id,
                "name" => $name,
                "price" => $price,
                "quantity" => 1
            ];
        }
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    // Show Cart
    public function showCart()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    // Remove from cart
    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', 'Product removed from cart!');
    }
}

