<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trending_product = Product::with('category')->latest()->get();
        return view('website.index',[
            'trending_product'=> $trending_product,
        ]);
    }





    public function contact()
    {
        return view('website.contact');
    }



    public function checkout()
    {
        return view('website.checkout');
    }



}
