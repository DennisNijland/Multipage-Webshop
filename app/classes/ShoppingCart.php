<?php

namespace App\Classes;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Product;

class ShoppingCart
{
    public static function addToCart($id)
    {
        $product = Product::find($id);
        print_r($product);
        $currentCart = session('cart');
        session('cart', $product);

    }

    public static function GetFromSession()
    {
        $currentCart = session('cart');
        return View('cart.index')->with('ShoppingCart', $currentCart);
    }
}