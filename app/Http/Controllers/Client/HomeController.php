<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $categories;
     public $products;

    public function __construct()
    {
        $this->categories = new Category();
        $this->products = new Product();
    }

    public function index()
    {
        $listCategory = $this->categories->getAll();
        // dd( $listCategory);
        $listProduct = $this->products->getAll();


        return view('client.index', ['categories' => $listCategory, 'products' => $listProduct]);
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
    public function show(string $id)
    {
        //
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
