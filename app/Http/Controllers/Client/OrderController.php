<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Mail\OrderConfirm;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Auth::user()->order;


        $orderStatus = Order::TRANG_THAI_DON_HANG;

        $type_cho_xac_nhan = Order::CHO_XAC_NHAN;
        $type_dang_van_chuyen = Order::DANG_VAN_CHUYEN;



        $totalOrders = Order::count();
        $deliveredOrders = Order::where('order_status', 'da_giao_hang')->count();
        $totalAmount = Order::where('order_status', 'da_giao_hang')->sum('total_amount');


        return view('client.pages.myaccount', compact('orders', 'orderStatus', 'type_cho_xac_nhan', 'type_dang_van_chuyen','totalOrders','deliveredOrders','totalAmount'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carts = session()->get('cart', []);
        if (!empty($carts)) {
            $total = 0;
            $subTotal = 0;

            foreach ($carts as $item) {
                $subTotal += $item['price'] * $item['quantity'];
            }

            $shipping = 30000;

            $total = $subTotal + $shipping;


            return view('client.order.create', compact('carts', 'subTotal', 'shipping', 'total'));
        }
        return redirect()->route('cart.list');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        //  dd($request->all());

        if ($request->isMethod('POST')) {
            DB::beginTransaction();

            try {
                $params = $request->except('_token');
                $params['code_oder'] = $this->generateUniqueOrderCode();

                $order = Order::query()->create($params);
                $orderId = $order->id;

                $carts = session()->get('cart', []);

                foreach ($carts as $key => $item) {
                    $totalAmount = $item['price'] * $item['quantity'];

                    $order->orderDetials()->create([
                        'order_id' => $orderId,
                        'product_id' => $key,
                        'unit_price' => $item['price'],
                        'quantity' => $item['quantity'],
                        'total_amount' => $totalAmount,
                    ]);
                    // Update product stock
                    $product = Product::find($key);
                    if ($product) {
                        $product->quantity -= $item['quantity'];
                        if ($product->quantity < 0) {
                            throw new \Exception('Not enough stock for product ID ' . $key);
                        }
                        $product->save();
                    }
                }
                DB::commit();
                //Khi thêm thành công sẽ thực hiện các công việc trong danh sách
                //Trừ số lượng sản phẩm


                Mail::to($order->recipient_email)->queue(new OrderConfirm($order));

                session()->put('cart', []);
                return redirect()->route('ordersc.index')->with('success', 'Đơn hàng đã được tạo thành công!');
            } catch (\Exception $e) {
                DB::rollBack();
                return redirect()->route('cart.list')->with('error', 'Có lỗi khi tạo đơn hàng. Vui lòng thử lại sau');
            }
        }
    }


    // public function thank(string $id)
    // {
    //     $order = Order::query()->findOrFail($id);
    //     $orderStatus = Order::TRANG_THAI_DON_HANG;
    //     $paymentStatus = Order::TRANG_THAI_THANH_TOAN;

    //     return view('client.order.thank', compact('order', 'orderStatus', 'paymentStatus'));
    // }
    // 'orders.index'
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $order = Order::query()->findOrFail($id);



        $orderStatus = Order::TRANG_THAI_DON_HANG;
        $paymentStatus = Order::TRANG_THAI_THANH_TOAN;


        return view('client.order.show', compact('order', 'orderStatus', 'paymentStatus'));
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
    // public function update(Request $request, string $id)
    // {
    //     $order = Order::query()->findOrFail($id);
    //     DB::beginTransaction();
    //     try {
    //         if ($request->has('huy_don_hang')) {
    //             $order->update(['order_status' => Order::HUY_DON_HANG]);
    //         } elseif ($request->has('da_giao_hang')) {
    //             $order->update(['order_status' => Order::DA_GIAO_HANG]);
    //         }
    //     } catch (\Exception $e) {
    //         DB::rollBack();
    //     }
    //     return redirect()->back();
    // }



    public function update(Request $request, string $id)
    {

        $order = Order::findOrFail($id);
        if ($request->has('huy_don_hang')) {
            $order->order_status = Order::HUY_DON_HANG;
        }

        if ($request->has('da_giao_hang')) {

            $order->order_status = Order::DA_GIAO_HANG;
        }


        $order->save();



        return redirect()->back()->with('success', 'Order status updated successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    function generateUniqueOrderCode()
    {
        do {
            $orderCode = 'ORD-' . Auth::id() . '-' . now()->timestamp;
        } while (Order::where('code_oder', $orderCode)->exists());

        return $orderCode;
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
