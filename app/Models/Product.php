<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;


    public function getAll()
    {
        $san_phams = DB::table('products')
            ->leftJoin('categories', 'products.category_id', '=', 'categories.id')
            ->leftJoin('promotions', 'products.promotions_id', '=', 'promotions.id')
            ->select(
                'products.*',
                'categories.categories_name',
                'promotions.promotions_name'
            )
            ->orderBy('products.id', 'DESC')
            ->get();

        return $san_phams;
    }




    // // Xử lý thêm sản phẩm
    public function createProduct($data)
    {
        DB::table('products')->insert(
            [

                'product_name' => $data['product_name'],
                'quantity' => $data['quantity'],
                'regular_price' => $data['regular_price'],
                'discount_price' => $data['discount_price'],
                'created_at' => $data['created_at'],
                'short_description' => $data['short_description'],
                'product_description' => $data['product_description'],
                'category_id' => $data['category_id'],
                'promotions_id' => $data['promotions_id'],
                'image' => $data['image'],
            ]
        );
    }

    public function updateSanPham($data, $id)
    {
        DB::table('products')
            ->where('id', $id)
            ->update($data);
    }

    // In your ProductsRepository or Products model

    public function getByCategory($categoryId)
    {
        $san_phams = DB::table('products')
            ->leftJoin('categories', 'products.category_id', '=', 'categories.id')
            ->leftJoin('promotions', 'products.promotions_id', '=', 'promotions.id')
            ->select(
                'products.*',
                'categories.categories_name',
                'promotions.promotions_name'
            )
            ->where('products.category_id', $categoryId)
            ->orderBy('products.id', 'DESC')
            ->get();

        return $san_phams;
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
