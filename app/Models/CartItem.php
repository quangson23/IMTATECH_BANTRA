<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
  




protected $fillable = ['quantity'];




// If you have a different table name, specify it here
    protected $table = 'cart_items'; // Adjust the table name if necessary
}
