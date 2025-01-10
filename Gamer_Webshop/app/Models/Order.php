<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'order_date', 'quantity', 'total_price'
    ];

    // Kapcsolat a termékekkel
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
