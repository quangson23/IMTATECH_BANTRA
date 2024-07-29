<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Banner extends Model
{
    use HasFactory;


    public function getAll()
    {
        $banners = DB::table('banners')->get();;

        return $banners;
    }



    public function createBanner($data)
    {
        DB::table('banners')->insert(
            [

                'image' =>$data['image'],
                'image_url' => $data['image_url'],
            ]
        );


    }



    public function updateBanner($data, $id)
    {
        DB::table('banners')
        ->where('id', $id)
        ->update($data);
    }

}
