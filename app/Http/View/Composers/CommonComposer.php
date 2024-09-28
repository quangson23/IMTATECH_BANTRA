<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Category;
use App\Models\Product;
use App\Models\Promotion;

class CommonComposer
{
    public function compose(View $view): void
    {
        $categories = Category::all();
        $products = Product::all();
        $promotions = Promotion::all();
        $view->with(compact('categories', 'products','promotions'));
    }
}
