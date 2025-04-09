<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_id',
        'subtotal',
        'postage',
        'discount_code_id',
        'discount',
        'total',
        'status',
        'session_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function items()
    {
        return $this->hasMany(BasketItem::class);
    }

    public function discountCode()
    {
        return $this->belongsTo(DiscountCode::class);
    }

    // If any modifications are made to the basket, update the total
    public function updateTotal()
    {
        $this->subtotal = 0;
        foreach($this->items as $item)
        {
            $this->subtotal += $item->subtotal;
        }

        $this->total = $this->subtotal + $this->postage - $this->discount;
        $this->save();
    }


    
}
