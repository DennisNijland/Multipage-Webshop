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
        $currentCart = session('cart');
        $cart = array();
            if (isset($currentCart)) {
                if (array_key_exists($id, $currentCart)) {
                    if ($currentCart[$id] >= 1){
                        $newAmount = $currentCart[$id] + 1;
                        $currentCart[$id] = $newAmount;
                        session(['cart' => $currentCart]);
                    }
                    } else {
                        $cart = $currentCart + array ($id => 1);
                        session(['cart' => $cart]);
                    }
                }
                else {
                    $CartNew = array($id => 1);
                    session(['cart' => $CartNew]);
                }
        return redirect('cart');
    }

    public static function getFromSession()
    {
        $products = array();
        $currentCart = session('cart');
        if (isset($currentCart)) {
            foreach ($currentCart as $key => $value) {
                $amount = $value;
                $item = Product::find($key);
                $item['amount'] = $amount;
                $item['price'] = $item['price'] * $amount;
                array_push($products, $item);
            }
        }
        return View('cart.index', compact(['products','currentCart']));
    }

    public static function changeAmount($id)
    {
        $currentCart = session('cart');
        dd($id);
    }
}