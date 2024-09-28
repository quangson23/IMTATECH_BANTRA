<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function listCart()
    {

        $cart = session()->get('cart', []);

        $total = 0;
        $subTotal = 0;
        foreach ($cart as $item) {
            $subTotal += $item['price'] * $item['quantity'];
        }
        $shipping = 20000;
        $total = $subTotal + $shipping;

        return view('client.pages.cart', compact('cart','subTotal','total','shipping' ));
    }

    public function addCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $productS = Product::query()->findOrFail($productId);

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'product_name' => $productS->product_name,
                'quantity' => $quantity,
                'price' => isset($productS->discount_price) ? $productS->discount_price : $productS->regular_price,
                'image' => $productS->image,
            ];
        }

        session()->put('cart', $cart);


        return redirect()->back();
    }

    public function updateCart(Request $request)
    {
        $cartNew = $request->input('cart',[]);
        session()->put('cart',$cartNew);
        return redirect()->back();
    }


    public function updateQuantity(Request $request)
{
    $request->validate([
        'id' => 'required|integer|exists:cart_items,id',
        'quantity' => 'required|integer|min:1',
    ]);

    $cartItem = CartItem::find($request->id);
    $cartItem->quantity = $request->quantity;
    $cartItem->save();

    // Optionally, return updated cart details
    return response()->json([
        'success' => true,
        'message' => 'Cart updated successfully.',
    ]);
}



}
