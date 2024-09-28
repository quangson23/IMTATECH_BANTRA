<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public $categories;


    public function __construct()
    {
        $this->categories = new Category();
    }

    public function index()
    {
        $listCategory = $this->categories->getAll();
        return view('admin.category.index', ['categories' => $listCategory]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // lấy danh mục sản phẩm
        // Sử dụng query builder
        // $listCategory = DB::table('categories')->get();

        // Hiển ra view add
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        // Xử lý ảnh
        if ($request->hasFile('image_path')) {
            // Nếu có đẩy hình ảnh
            $filename = $request->file('image_path')->store('uploads/sanpham', 'public');
        } else {
            $filename = null;
        }

        $dataInsert = [
            'categories_name' => $request->categories_name,
            'categories_description' => $request->categories_description,
            'image_path' => $filename,
            'categories_status' => $request->categories_status, // Lấy giá trị của radio button
        ];

        $this->categories->createCategory($dataInsert);


        return redirect()->route('category.index')->with('success','Thêm danh mục thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
          // form sửa sản phẩm
        // Lấy sản phẩm theo id
        $categorieS = $this->categories->find($id);
        $categories = DB::table('categories')->get();
        if (!$categorieS) {
            return redirect()->route('category.index');
        }
        return view('admin.category.detail', compact('categorieS', 'categories'));
    }


 




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // form sửa sản phẩm
        // Lấy sản phẩm theo id
        $categorieS = $this->categories->find($id);
        $categories = DB::table('categories')->get();
        if (!$categorieS) {
            return redirect()->route('category.index');
        }
        return view('admin.category.update', compact('categorieS', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Xử lý logic update
        // Lấy lại thông tin sản phẩm
        $categorieS = $this->categories->find($id);

        // Xử lý và lưu ảnh nếu có ảnh mới được upload
        if ($request->hasFile('image_path')) {
            // Nếu có ảnh cũ thì xóa đi
            if ($categorieS->image_path) {
                Storage::disk('public')->delete($categorieS->image_path);
            }

            // lưu ảnh mới
            $fileName = $request->file('image_path')->store('uploads/sanpham', 'public');
        } else {
            $fileName = $categorieS->image_path;
        }

        $dataUpdate = [

            'categories_name' => $request->categories_name,
            'categories_description' => $request->categories_description,
            'image_path' => $fileName,
            'categories_status' => $request->categories_status, // Lấy giá trị của radio button
        ];

        $categorieS->updateCategory($dataUpdate, $id);

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Xử lý xóa sản phẩm
        // Tìm sản phẩm
        $categorieS = $this->categories->find($id);

        if (!$categorieS) {
            return redirect()->route('category.index');
        }
        // Xóa hình ảnh của sản phẩm
        if ($categorieS->image_path) {
            Storage::disk('public')->delete($categorieS->image_path);
        }
        // xóa sản phẩm trong db
        $categorieS->delete();

        return redirect()->route('category.index');
    }


    public function bulkDelete(Request $request)
{
    $this->validate($request, [
        'categories' => 'required|array',
        'categories.*' => 'exists:categories,id',
    ]);

    Category::destroy($request->categories);

    return redirect()->route('category.index')->with('success', 'Categories deleted successfully.');
}
}
