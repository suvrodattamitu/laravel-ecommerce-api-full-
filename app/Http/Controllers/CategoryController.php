<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('subcategories')->get();

        return response()->json([
            'categories'    => $categories
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => ['required'],
            'slug'  => ['required'],
            'image' => ['required'],
        ]);
        Category::create($request->all());
    }
}
