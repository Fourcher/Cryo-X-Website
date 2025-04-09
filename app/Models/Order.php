<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'basket_id',
        'delivery_address_id',
        'billing_address_id',
        'subtotal',
        'postage',
        'discount_code_id',
        'discount',
        'total',
        'status',
        'customer_notes',
        'admin_notes',
        'paid_at',
        'shipping_reference',
        'shipping_information',
        'shipping_status',
        'phone_number',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function basket()
    {
        return $this->belongsTo(Basket::class);
    }

    public function deliveryAddress()
    {
        return $this->belongsTo(Address::class);
    }

    public function billingAddress()
    {
        return $this->belongsTo(Address::class);
    }

    public function discountCode()
    {
        return $this->belongsTo(DiscountCode::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    

}
