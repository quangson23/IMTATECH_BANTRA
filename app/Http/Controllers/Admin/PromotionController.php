<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PromotionController extends Controller
{
    public $promotions;


    public function __construct()
    {
        $this->promotions = new Promotion();
    }
    public function index()
    {
        $listPromotion = $this->promotions->getAll();
        return view('admin.promotion.index', ['promotions' => $listPromotion]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.promotion.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Xử lý ảnh
        if ($request->hasFile('image_path')) {
            // Nếu có đẩy hình ảnh
            $filename = $request->file('image_path')->store('uploads/sanpham', 'public');
        } else {
            $filename = null;
        }

        $dataInsert = [
            'promotions_name' => $request->promotions_name,
            'promotions_description' => $request->promotions_description,
            'promotions_condition' => $request->promotions_condition,
            'promotions_price' => $request->promotions_price,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
            'image_path' => $filename,

        ];

        $this->promotions->createPromotion($dataInsert);


        return redirect()->route('promotion.index')->with('success', 'Thêm khuyến mại thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $promotionS = $this->promotions->find($id);
        $promotions = DB::table('promotions')->get();
        if (!$promotionS) {
            return redirect()->route('promotion.index');
        }
        return view('admin.promotion.update', compact('promotionS', 'promotions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          // Xử lý logic update
        // Lấy lại thông tin sản phẩm
        $promotionS = $this->promotions->find($id);

        // Xử lý và lưu ảnh nếu có ảnh mới được upload
        if ($request->hasFile('image_path')) {
            // Nếu có ảnh cũ thì xóa đi
            if ($promotionS->image_path) {
                Storage::disk('public')->delete($promotionS->image_path);
            }

            // lưu ảnh mới
            $fileName = $request->file('image_path')->store('uploads/sanpham', 'public');
        } else {
            $fileName = $promotionS->image_path;
        }

        $dataUpdate = [

            'promotions_name' => $request->promotions_name,
            'promotions_description' => $request->promotions_description,
            'promotions_condition' => $request->promotions_condition,
            'promotions_price' => $request->promotions_price,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
            'image_path' => $fileName,
        ];

        $promotionS->updatePromotion($dataUpdate, $id);

        return redirect()->route('promotion.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      // Xử lý xóa sản phẩm
        // Tìm sản phẩm
        $promotionS = $this->promotions->find($id);

        if (!$promotionS) {
            return redirect()->route('promotion.index');
        }
        // Xóa hình ảnh của sản phẩm
        if ($promotionS->image_path) {
            Storage::disk('public')->delete($promotionS->image_path);
        }
        // xóa sản phẩm trong db
        $promotionS->delete();

        return redirect()->route('promotion.index');
    }

}
