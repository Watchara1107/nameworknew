<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class welcome extends Controller
{
    public function showproduct(Request $request)
    {
        $product = Product::when($request->type, function ($query) use ($request) {
            return $query->where('category_id', $request->type);
        })->get();

        $categories = Category::all();

        $type = "";

        if ($request->type) {
            $type = $request->type;
        }

        return view('welcome', compact('product', 'categories', 'type'));
    }
}
