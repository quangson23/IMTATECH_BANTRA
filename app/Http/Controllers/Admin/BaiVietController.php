<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BaiViet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BaiVietController extends Controller
{
    public $bai_viets;

    public function __construct()
    {
        $this->bai_viets = new BaiViet();
    }
    public function index()
    {
        $listBaiViet = $this->bai_viets->getAll();
        return view('admin.baiviet.index', ['bai_viets' => $listBaiViet]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.baiviet.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation dữ liệu
        $request->validate([
            'tieu_de' => 'required|string|max:255',
            'noi_dung' => 'required|string',
            'trang_thai' => 'required|in:an,hien',
            'hinh_anh' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // ảnh có thể để trống, chỉ chấp nhận các định dạng ảnh nhất định
        ]);

        // Xử lý upload ảnh nếu có
        if ($request->hasFile('hinh_anh')) {
            $filename = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
        } else {
            $filename = null;
        }

        // Tạo mảng dữ liệu để lưu vào database
        $dataInsert = [
            'hinh_anh' => $filename,
            'tieu_de' => $request->input('tieu_de'),
            'noi_dung' => $request->input('noi_dung'),
            'trang_thai' => $request->input('trang_thai'),
            'user_id' => auth()->id(), // lấy user_id của người đăng nhập hiện tại
        ];

        // Gọi phương thức createBaiViet từ model để thêm dữ liệu vào database
        $this->bai_viets->createBaiViet($dataInsert);

        // Điều hướng về trang danh sách bài viết
        return redirect()->route('bai-viet.index')->with('success', 'Bài viết đã được tạo thành công');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    // Lấy thông tin bài viết theo id
    $baivietS = $this->bai_viets->find($id);

    // Kiểm tra nếu bài viết không tồn tại
    if (!$baivietS) {
        return redirect()->route('bai-viet.index')->with('error', 'Bài viết không tồn tại');
    }

    // Trả về view chi tiết bài viết
    return view('admin.baiviet.detail', ['baivietS' => $baivietS]);
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $baivietS = $this->bai_viets->find($id);

        if (!$baivietS) {
            return redirect()->route('bai-viet.index');
        }
        return view('admin.baiviet.update', compact('baivietS'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation dữ liệu
        $request->validate([
            'tieu_de' => 'required|string|max:255',
            'noi_dung' => 'required|string',
            'trang_thai' => 'required|in:an,hien',
            'hinh_anh' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Lấy lại thông tin bài viết
        $baivietS = $this->bai_viets->find($id);

        // Xử lý và lưu ảnh nếu có ảnh mới được upload
        if ($request->hasFile('hinh_anh')) {
            // Xóa ảnh cũ nếu tồn tại
            if ($baivietS->hinh_anh) {
                Storage::disk('public')->delete($baivietS->hinh_anh);
            }

            // Lưu ảnh mới
            $fileName = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
        } else {
            $fileName = $baivietS->hinh_anh; // giữ lại ảnh cũ nếu không có ảnh mới
        }

        // Cập nhật các thông tin khác
        $dataUpdate = [
            'hinh_anh' => $fileName,
            'tieu_de' => $request->input('tieu_de'),
            'noi_dung' => $request->input('noi_dung'),
            'trang_thai' => $request->input('trang_thai'),
        ];

        // Gọi phương thức updateBaiViet để cập nhật bài viết trong database
        $this->bai_viets->updateBaiViet($dataUpdate, $id);

        // Điều hướng về trang danh sách bài viết
        return redirect()->route('bai-viet.index')->with('success', 'Bài viết đã được cập nhật thành công');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // Xử lý xóa sản phẩm
        // Tìm sản phẩm
        $baivietL = $this->bai_viets->find($id);

        if (!$baivietL) {
            return redirect()->route('bai-viet.index');
        }
        // Xóa hình ảnh của sản phẩm
        if ($baivietL->image) {
            Storage::disk('public')->delete($baivietL->image);
        }
        // xóa sản phẩm trong db
        $baivietL->delete();

        return redirect()->route('bai-viet.index');
    }
}
