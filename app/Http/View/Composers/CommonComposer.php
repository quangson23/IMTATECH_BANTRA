<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Category;
use App\Models\Product;

class CommonComposer
{
    public function compose(View $view): void
    {
        $categories = Category::all();
        $products = Product::all();
        $view->with(compact('categories', 'products'));
    }
}
