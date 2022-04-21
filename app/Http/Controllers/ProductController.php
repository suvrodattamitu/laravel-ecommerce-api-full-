<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $category = '';
        $subCategory = '';

        $products = Product::get();

        return response()->json([
            'products'  => $products
        ]);
    }

    public function view($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return response()->json([
            'product'   => $product
        ]);
    }
}
