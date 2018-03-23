<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use App\Bear;
use App\Picnic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('front.front-index', compact('products'));
    }
    public function getAddTpCart(Request $request, $id)
    {
        $product = Product::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);

        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);

        return redirect()->route('main');

    }
    public function getCart()
    {
        if (!Session::has('cart')){
            return view ('front.cart', ['products' => null]);

            $oldCart = Session::get('cart');

            $cart = new Cart($oldCart);

            return view ('front.cart', [
                'products' => $cart->items,
                'totalPrice' => $cart->totalPrice,
                'totalQty'  => $cart->totalQty
            ]);
        }
    }
    public function relation()
    {
        $bearLawly = Bear::where('name', '=', 'Lawly')->first();
        $bears = Bear::where('danger_level', '>', '5')->get();

        $fish = $bearLawly->fish->weight;


        $bearMax = Bear::where('name', '=', 'Max')->first();

        $bearWhite = Bear::where('name', '=', 'White')->first();

        $forest = Picnic::where('name', '=', 'forest')->first();

        return view('front.relation', compact('fish', 'bearMax', 'bearWhite', 'forest'));
    }
}
