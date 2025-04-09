<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStockCount extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'stock_count',
        'stock_reserved',
        'stock_available',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    
}
