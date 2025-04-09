<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\Flysystem\UnixVisibility\PortableVisibilityConverter;

class ProductImage extends Model
{
    use HasFactory;

    protected $table = 'product_images';


    protected $fillable = [
        'product_id',
        'image_file',
        'caption',
        'is_primary',
        'status',
    ];
}
