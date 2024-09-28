<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $categories;
     public $products;
     public $banners;
     public $promotions;
    public function __construct()
    {
        $this->categories = new Category();
        $this->products = new Product();
        $this->banners = new Banner();
        $this->promotions = new Promotion();
    }

    public function index()
    {
        $listCategory = $this->categories->getAll();
        // dd( $listCategory);
        $listProduct = $this->products->getAll();
        $listBanner = $this->banners->getAll();
        $listPromotion = $this->promotions->getAll();
        return view('client.index', ['categories' => $listCategory, 'products' => $listProduct, 'banners' => $listBanner, 'promotions' => $listPromotion]);
    }


    public function contac()
    {
        $listCategory = $this->categories->getAll();



        return view('client.pages.contac', ['categories' => $listCategory]);
    }

    public function cart()
    {
        $listCategory = $this->categories->getAll();



        return view('client.pages.cart', ['categories' => $listCategory]);
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
    public function show()
    {

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
