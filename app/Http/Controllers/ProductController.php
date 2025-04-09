<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    
    public function vinyl()
    {
        $product = Product::where('sku_code', 'cryoskin')->first();
        return view('product.vinyl', compact('product'));
    }

    public function paint()
    {
        $product = Product::where('sku_code', 'cryopaint')->first();
        return view('product.paint', compact('product'));
    }

    public function spray()
    {
        $product = Product::where('sku_code', 'cryocan')->first();
        return view('product.spray', compact('product'));
    }

    public function sample()
    {
        $product = Product::where('sku_code', 'sample')->first();
        return view('product.sample', compact('product'));
    }

    public function test()
    {
        $product = Product::where('sku_code', 'test')->first();
        return view('product.test', compact('product'));
    }

}
