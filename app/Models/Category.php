<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;



    public function getAll()
    {
        $categories = DB::table('categories')->get();;

        return $categories;
    }



    public function createCategory($data)
    {
        DB::table('categories')->insert(
            [
                'categories_name' => $data['categories_name'],
                'categories_description' => $data['categories_description'],
                'image_path' =>$data['image_path'],
                'categories_status' =>$data['categories_status'],
            ]
        );


    }

    public function updateCategory($data, $id)
    {
        DB::table('categories')
        ->where('id', $id)
        ->update($data);
    }
}
