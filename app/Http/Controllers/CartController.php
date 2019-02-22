<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FoodMenu;

class CartController extends Controller
{
    public function addToCart(Request $request)
        {
            $menu = FoodMenu::find($request->id);
            $data['id'] = $menu->id;
            $data['quantity'] = 1;
            $data['price'] = $menu->price;

            if($request->session()->has('cart')){
                $cart = $request->session()->get('cart', collect([]));
                $cart->push($data);
            }
            else{
                $cart = collect([$data]);
                $request->session()->put('cart', $cart);
            }

            return view('partials.order_details');
        }

        public function removeFromCart(Request $request)
        {
            if($request->session()->has('cart')){
                $cart = $request->session()->get('cart', collect([]));
                $cart->forget($request->key);
                $request->session()->put('cart', $cart);
            }

            return view('partials.order_details');
        }

        public function updateQuantity(Request $request)
        {
            $cart = $request->session()->get('cart', collect([]));
            $cart = $cart->map(function ($object, $key) use ($request) {
                if($key == $request->key){
                    $object['quantity'] = $request->quantity;
                }
                return $object;
            });
            $request->session()->put('cart', $cart);

            return view('partials.order_details');
        }

}
