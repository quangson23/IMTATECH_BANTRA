<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detailProduct(string $id)
    {
        $product = Product::query()->findOrFail($id);
        $listProduct = Product::query()->get();

        $product->increment('view');

        return view('client.product.productdetail', compact('product', 'listProduct'));
    }
}
