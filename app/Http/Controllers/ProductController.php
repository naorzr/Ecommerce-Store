<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function index(){
        $products = \App\Product::all();
        
        return response()->json($products);
    }


    public function getAddToCart(Request $request, $id)
    {

         $product = \App\Product::find($id);
         $oldCart = Session::has('cart') ? Session::get('cart') : NULL;
         $cart = new \App\Cart($oldCart);
         $cart->add($product,$product->id);
         $request->session()->put('cart',$cart);
         return response()->json($cart);
    }

    public function getCart() {
        if(!Session::has('cart')){
            return null;
        }
        $oldCart = Session::get('cart');
        $cart = new \App\Cart($oldCart);
        return response()->json($cart);

    }

    public function deleteItemFromCart(Request $request, $id){
        $oldCart = Session::has('cart') ? Session::get('cart') : NULL;
        $cart = new \App\Cart($oldCart);
        $cart->remove($id);
        $request->session()->put('cart',$cart);
        return response()->json($cart);
    }
}
