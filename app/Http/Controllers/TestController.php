<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class TestController extends Controller
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



       return view('client.pages.myaccount');
   }





}
