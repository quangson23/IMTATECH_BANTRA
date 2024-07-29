<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Coupon extends Model
{
    use HasFactory;


    public function getAll()
    {
        $coupons = DB::table('coupons')->get();;

        return $coupons;
    }


    public function createCoupon($data)
    {
        DB::table('coupons')->insert(
            [
                'coupon_name' => $data['coupon_name'],
                'coupon_condition' => $data['coupon_condition'],
                'coupon_price' => $data['coupon_price'],
                'coupon_number' => $data['coupon_number'],
                'coupon_code' => $data['coupon_code'],
                'start_date' => $data['start_date'],
                'end_date' => $data['end_date'],
                'status' => $data['status'],
            ]
        );
    }

    public function updateCoupon($data, $id)
    {
        DB::table('coupons')
            ->where('id', $id)
            ->update($data);
    }
}
