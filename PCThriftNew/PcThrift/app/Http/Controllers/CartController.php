<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;


class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', auth()->id())->get();
        return view('/cart', compact('cartItems'));
    }
    
    public function add(Request $request)
    {
        $image = $request->input('image');
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $price = $request->input('price');

        $product = Product::find($productId);
        if(!$product){
            return redirect()->back()->with('error', 'Product not found.');
        }

        $cartItems = Cart::where('user_id', auth()->id())->where('product_id', $product)->first();

        if($cartItems){
            $cartItems->quantity += $quantity;
            $cartItems->save();
        }else{
            Cart::create([
                'user_id'=>auth()->id(),
                'product_id'=>$productId,
                'quantity'=>$quantity,
            ]);
        }
        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }

    public function remove(Request $request)
    {
        $cartItemId = $request->input('cart_item_id');

        $cartItem = Cart::where('user_id', auth()->id())
            ->where('id', $cartItemId)
            ->first();

        if (!$cartItem) {
            return redirect()->back()->with('error', 'Cart item not found.');
        }

        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'Product removed from cart.');
    }
};
