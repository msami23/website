<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function  productsDetails($id){
        $product = Product::with('category')->findOrFail($id);



      // $similar_product = $product->getSimilar();
        return view('website.products_details',[
            'product' => $product,
           // 'similar_product' => $similar_product,
        ]);
    }
}
