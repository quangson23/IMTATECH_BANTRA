<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public $products;


    public function __construct()
    {
        $this->products = new Product();
    }



    public function index()
    {
        $listProduct = $this->products->getAll();

        return view('admin.product.index', compact('listProduct'));



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Get the list of product categories
        $listCategory = DB::table('categories')->get();

        // Get the list of promotions
        $listPromotion = DB::table('promotions')->get();

        // Pass both lists to the view
        return view('admin.product.add', [
            'categories' => $listCategory,
            'promotions' => $listPromotion
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Xử lý ảnh
        if ($request->hasFile('image')) {
            // Nếu có đẩy hình ảnh
            $filename = $request->file('image')->store('uploads/sanpham', 'public');
        } else {
            $filename = null;
        }

        $dataInsert = [

            'product_name' => $request->product_name,
            'quantity' => $request->quantity,
            'regular_price' => $request->regular_price,
             'discount_price' => $request->discount_price,
            'created_at' => $request->created_at,
            'product_description' => $request->product_description,
            'category_id' => $request->category_id,
            'promotions_id' => $request->promotions_id,
            'image' => $filename,
        ];

        // dd($dataInsert);

        $this->products->createProduct($dataInsert);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            // form sửa sản phẩm
        // Lấy sản phẩm theo id
        $productS = $this->products->find($id);
        $categories = DB::table('categories')->get();
        if (!$productS) {
            return redirect()->route('product.index');
        }
        return view('admin.product.detail', compact('productS', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       // form sửa sản phẩm
        // Lấy sản phẩm theo id
        $productS = $this->products->find($id);
        $categories = DB::table('categories')->get();
        if (!$productS) {
            return redirect()->route('product.index');
        }
        return view('admin.product.update', compact('productS', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
             // Xử lý logic update
        // Lấy lại thông tin sản phẩm
        $productS = $this->products->find($id);

        // Xử lý và lưu ảnh nếu có ảnh mới được upload
        if ($request->hasFile('image')) {
            // Nếu có ảnh cũ thì xóa đi
            if ($productS->hinh_anh) {
                Storage::disk('public')->delete($productS->image);
            }

            // lưu ảnh mới
            $fileName = $request->file('image')->store('uploads/sanpham', 'public');
        }else{
            $fileName = $productS->image;
        }

        $dataUpdate = [

            'product_name' => $request->product_name,
            'quantity' => $request->quantity,
            'regular_price' => $request->regular_price,
             'discount_price' => $request->discount_price,
            'created_at' => $request->created_at,
            'product_description' => $request->product_description,
            'category_id' => $request->category_id,
            'promotions_id' => $request->promotions_id,
            'image' => $fileName,
        ];

        $productS->updateSanPham($dataUpdate, $id);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // Xử lý xóa sản phẩm
        // Tìm sản phẩm
        $productS = $this->products->find($id);

        if (!$productS) {
            return redirect()->route('product.index');
        }
        // Xóa hình ảnh của sản phẩm
        if ($productS->image) {
            Storage::disk('public')->delete($productS->image);
        }
        // xóa sản phẩm trong db
        $productS->delete();

        return redirect()->route('product.index');
    }

    // public function bulkDelete(Request $request)
    // {
    //     $ids = $request->input('ids');

    //     if ($ids) {
    //         $products = Product::whereIn('id', $ids)->get();

    //         foreach ($products as $product) {
    //             // Xóa hình ảnh của sản phẩm
    //             if ($product->image) {
    //                 Storage::disk('public')->delete($product->image);
    //             }
    //             // Xóa sản phẩm trong db
    //             $product->delete();
    //         }

    //         return redirect()->route('product.index')->with('success', 'Các sản phẩm đã được xóa thành công.');
    //     } else {
    //         return redirect()->route('product.index')->with('error', 'Vui lòng chọn ít nhất một sản phẩm để xóa.');
    //     }
    // }
}
