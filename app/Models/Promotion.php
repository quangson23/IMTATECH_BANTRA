<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Promotion extends Model
{
    use HasFactory;


    public function getAll()
    {
        $promotions = DB::table('promotions')->get();;

        return $promotions;
    }

    public function createPromotion($data)
    {
        DB::table('promotions')->insert(
            [

                'promotions_name' => $data['promotions_name'],
                'promotions_description' => $data['promotions_description'],
                'promotions_condition' => $data['promotions_condition'],
                'promotions_price' => $data['promotions_price'],
                'start_date' => $data['start_date'],
                'end_date' => $data['end_date'],
                'status' => $data['status'],
                'image_path' => $data['image_path'],

            ]
        );


    }

    public function updatePromotion($data, $id)
    {
        DB::table('promotions')
        ->where('id', $id)
        ->update($data);
    }


}
