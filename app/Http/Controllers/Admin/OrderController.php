<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Danh sách đơn hàng";

        $listOrder = Order::query()->orderByDesc('id')->get();

        $orderStatus = Order::TRANG_THAI_DON_HANG;
        $type_huy_don_hang = Order::HUY_DON_HANG;

        return view('admin.order.index', compact('title', 'listOrder', 'orderStatus', 'type_huy_don_hang'));
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Thông tin chi tiết đơn hàng";
        $order = Order::query()->findOrFail($id);
        $orderStatus = Order::TRANG_THAI_DON_HANG;
        $paymentStatus = Order::TRANG_THAI_THANH_TOAN;
      return view('admin.order.detail', compact('title','order','orderStatus','paymentStatus'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::query()->findOrFail($id);
        $currentStatus = $order->order_status;
        $newStatus = $request->input('order_status');
        $status = array_keys(Order::TRANG_THAI_DON_HANG);

        //Kiểm tra nếu hủy thì ko chọn dc trạng thái khác
        if ($currentStatus === Order::HUY_DON_HANG) {

            return redirect()->route('orders.index')->with('error', 'Đơn hàng đã bị hủy không thể thay đổi trạng thái');
        }

        //Kiểm tra nếu trạng thái mới không nằm sau trạng thái hiện tại
        if (array_search($newStatus, $status) < array_search($currentStatus, $status)) {
            return redirect()->route('orders.index')->with('error', 'Không thể cập nhật ngược lại trạng thái');
        }

        $order->order_status = $newStatus;
        $order->save();
        return redirect()->route('orders.index')->with('success', 'Cập nhật trạng thái thành công');
    }

      public function destroy(string $id)
    {
        $order = Order::query()->findOrFail($id);

        if ($order && $order->order_status == Order::HUY_DON_HANG) {
            $order->orderDetials()->delete();
            $order->delete();
            return redirect()->back()->with('success', 'Xóa đơn hàng thành công thành công');
        }
        return redirect()->back()->with('error', 'Không thể xóa đơn hàng');


    }

    public function printInvoice($id)
    {
        // Tải đơn hàng cùng với chi tiết đơn hàng và sản phẩm
        $order = Order::with('orderDetials.product')->findOrFail($id);

        // Tạo PDF từ view và trả về cho người dùng tải về
        $pdf = Pdf::loadView('admin.pdf.pdf', compact('order'));

        return $pdf->download('invoice-' . $order->code_order . '.pdf');
    }



}
