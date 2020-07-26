<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FillController extends Controller
{
    public function download($id)
{
    $product  = Product::findOrFail($id);
    return response()->download(storage_path('app/public/'.
         $product->image));
}

public function view($id)
{
    $product  = Product::findOrFail($id);
    return response()->file(storage_path('app/public/'.
         $product->image));
}


}
