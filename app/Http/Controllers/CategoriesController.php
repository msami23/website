<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function category()
    {
        $shop_category = Product::with('category')->latest()->limit(9)->get();
        return view('website.category',[
            'shop_category' => $shop_category,
        ]);
    }
}
