<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountCode extends Model
{
    use HasFactory;

    protected $fillable = [
        "code",
        "description",
        "valid_from",
        "valid_to",
        "type",
        "value",
        "usage_limit",
        "usage_count",
        "status"
    ];
}
