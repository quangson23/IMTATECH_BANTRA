<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public $banners;

    public function __construct()
    {
        $this->banners = new Banner();
    }



    public function index()
    {
        $listBanner = $this->banners->getAll();
        return view('admin.banner.index', ['banners' => $listBanner]);
    }


    public function create()
    {
        return view('admin.banner.add');
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
            'image' => $filename,
            'image_url' => $request->image_url,
        ];

        $this->banners->createBanner($dataInsert);

        return redirect()->route('banner.index');
    }


    public function show()
    {
        // $banners = Banner::all(); // Or adjust based on your needs
        // return view('client.index', compact('banners'));
    }


    public function edit(string $id)
    {
        $bannerS = $this->banners->find($id);

        if (!$bannerS) {
            return redirect()->route('banner.index');
        }
        return view('admin.banner.update', compact('bannerS'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       // Xử lý logic update
        // Lấy lại thông tin sản phẩm
        $bannerS = $this->banners->find($id);

        // Xử lý và lưu ảnh nếu có ảnh mới được upload
        if ($request->hasFile('image')) {
            // Nếu có ảnh cũ thì xóa đi
            if ($bannerS->image) {
                Storage::disk('public')->delete($bannerS->image);
            }

            // lưu ảnh mới
            $fileName = $request->file('image')->store('uploads/sanpham', 'public');
        } else {
            $fileName = $bannerS->image;
        }

        $dataUpdate = [
            'image' => $fileName,
            'image_url' => $request->image_url,
        ];

        $bannerS->updateBanner($dataUpdate, $id);

        return redirect()->route('banner.index');
    }


    public function destroy(string $id)
    {
          // Xử lý xóa sản phẩm
        // Tìm sản phẩm
        $bannerL = $this->banners->find($id);

        if (!$bannerL) {
            return redirect()->route('banner.index');
        }
        // Xóa hình ảnh của sản phẩm
        if ($bannerL->image) {
            Storage::disk('public')->delete($bannerL->image);
        }
        // xóa sản phẩm trong db
        $bannerL->delete();

        return redirect()->route('banner.index');
    }





}
