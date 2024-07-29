<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CouponController extends Controller
{
    public $coupons;


    public function __construct()
    {
        $this->coupons = new Coupon();
    }
    public function index()
    {
        $listCoupon = $this->coupons->getAll();
        return view('admin.coupon.index', ['coupons' => $listCoupon]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.coupon.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $dataInsert = [
            'coupon_name' => $request->coupon_name,
            'coupon_condition' => $request->coupon_condition,
            'coupon_price' => $request->coupon_price,
            'coupon_number' => $request->coupon_number,
            'coupon_code' => $request->coupon_code,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
        ];

        $this->coupons->createCoupon($dataInsert);


        return redirect()->route('coupon.index')->with('success', 'Thêm mã thành công');
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
        $couponS = $this->coupons->find($id);
        $coupons = DB::table('categories')->get();
        if (!$couponS) {
            return redirect()->route('coupon.index');
        }
        return view('admin.coupon.update', compact('couponS', 'coupons'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Xử lý logic update
        // Lấy lại thông tin sản phẩm
        $couponS = $this->coupons->find($id);


        $dataUpdate = [

            'coupon_name' => $request->coupon_name,
            'coupon_condition' => $request->coupon_condition,
            'coupon_price' => $request->coupon_price,
            'coupon_number' => $request->coupon_number,
            'coupon_code' => $request->coupon_code,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
        ];

        $couponS->updateCoupon($dataUpdate, $id);

        return redirect()->route('coupon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Xử lý xóa sản phẩm
        // Tìm sản phẩm
        $couponS = $this->coupons->find($id);



        $couponS->delete();


        return redirect()->route('coupon.index');
    }

    public function bulkDelete(Request $request)
    {
        $this->validate($request, [
            'coupons' => 'required|array',
            'coupons.*' => 'exists:coupons,id',
        ]);

        Coupon::destroy($request->coupons);

        return redirect()->route('coupon.index')->with('success');
    }
}
