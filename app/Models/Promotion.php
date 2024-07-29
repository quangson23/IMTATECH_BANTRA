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




}
