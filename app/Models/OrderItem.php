<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $table = 'order_item';
    protected $fillable = [
        'qty',    'price',   'discount', 'color_id',   'order_id', 'product_id',
    ];
}
