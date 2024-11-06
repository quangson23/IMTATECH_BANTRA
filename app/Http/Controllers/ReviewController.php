<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    // Hiển thị bình luận theo sản phẩm
    public function show($id)
    {
        $product = Product::with('review')->find($id);
        return view('client.product.productdetail', compact('product'));
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'product_id' => 'required|exists:products,id',
                'star' => 'required',
                'content' => 'max:500',
            ],
            [
                'star.required' => 'Hãy đánh giá sao cho bình luận.',
                'content.max' => 'Nội dung bình luận phải không quá 500 ký tự.',
            ]
        );

        Review::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'star' => $request->star,
            'content' => $request->content,
        ]);

        return back()->with('success', 'Bình luận của bạn đã được gửi thành công.');
    }
}
