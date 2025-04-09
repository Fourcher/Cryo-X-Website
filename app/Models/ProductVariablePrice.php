<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariablePrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'lower_amount_threshold',
        'upper_amount_threshold',
        'new_price',
    ];
}
