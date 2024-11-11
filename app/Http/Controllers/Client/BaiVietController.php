<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\BaiViet;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    public $bai_viets;

    public function __construct()
    {
        $this->bai_viets = new BaiViet();
    }
    public function index()
    {
        // Lấy danh sách bài viết từ database
        $baiViets = BaiViet::all();  // Hoặc sử dụng các phương thức khác như paginate() nếu cần phân trang

        // Truyền dữ liệu vào view
        return view('client.pages.blog', compact('baiViets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $baiviet = BaiViet::findOrFail($id); // Fetch the article by ID
        $latestPosts = BaiViet::latest()->take(3)->get();
        return view('client.pages.blog-detail', compact('baiviet','latestPosts')); // Pass data to view
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
