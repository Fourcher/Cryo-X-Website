<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku_code',
        'title',
        'short_description',
        'long_description',
        'price',
        'stock_available',
        'stock_reserved',
        'status',
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function image(){
        return $this->images()->where('is_primary', 1)->first()->image_file;
    }

    public function variablePrices()
    {
        return $this->hasMany(ProductVariablePrice::class);
    }

    public function orderedItems()
    {
        return $this->belongsToMany(OrderItem::class);
    }




}
