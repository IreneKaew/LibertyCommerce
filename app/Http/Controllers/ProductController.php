<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productpage($id)
    {
        $product = Product::find($id);
        return view('product', ['product' => $product]);
    }
}
