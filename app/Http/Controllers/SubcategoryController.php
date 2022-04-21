<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index()
    {
        $sub_categories = Subcategory::with('category')->get();

        return response()->json([
            'sub_categories'    => $sub_categories
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => ['required'],
            'category_id'   => ['required'],
            'slug'          => ['required'],
            'image'         => ['required'],
        ]);
        Subcategory::create($request->all());
    }
}
