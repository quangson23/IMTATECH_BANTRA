<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */ public $categories;
    public $products;

    public function __construct()
    {
        $this->categories = new Category();
        $this->products = new Product();
    }

    // public function index()
    // {

    //     $listCategory = $this->categories->getAll();
    //     // dd( $listCategory);
    //     $listProduct = $this->products->getAll();


    //     return view('client.pages.shop', ['categories' => $listCategory, 'products' => $listProduct]);
    // }


    public function index(Request $request)
    {
        $categoryId = $request->query('category_id');
        $listCategory = $this->categories->getAll();

        if ($categoryId) {
            $listProduct = $this->products->getByCategory($categoryId);
        } else {
            $listProduct = $this->products->getAll();
        }

        return view('client.pages.shop', [
            'categories' => $listCategory,
            'products' => $listProduct
        ]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // public function myacc()
    // {
    //     $orders = Auth::user()->order;


    //     $orderStatus = Order::TRANG_THAI_DON_HANG;

    //     $type_cho_xac_nhan = Order::CHO_XAC_NHAN;
    //     $type_dang_van_chuyen = Order::DANG_VAN_CHUYEN;


    //     return view('client.pages.myaccount', compact('orders', 'orderStatus', 'type_cho_xac_nhan', 'type_dang_van_chuyen'));
    // }




}
