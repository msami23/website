<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{

    public function index(){
        $request =request();

        $product_ids = $request->cookie('cart',[]);
        if($product_ids){
            $product_ids = unserialize($product_ids);
        }
        $ids = array_keys($product_ids);
        $products = Product::whereIn('id',$ids)->get();

         return view('website.cart',[
            'products' => $products,
            'quantity'=> $product_ids,
        ]);
    }

    public function store(Request $request){

        if(Auth::check()){


        }else{
            $products = $request->cookie('cart',[]);
            if($products){
                $products = unserialize($products);
            }
            $product_id = $request->post('product_id');
            if(array_key_exists($product_id, $products)){
                $products[$product_id]++;
            }else{
                $products[$product_id] = 1;

            }

            $cookie = Cookie::make('cart',serialize($products), 10080);

            return redirect()->route('cart')
            ->cookie($cookie);
        }

    }

    public function remove($product_id){
        $request = request();
        $products = $request->cookie('cart',[]);
        if($products){
            $products = unserialize($products);
        }
        if(array_key_exists($product_id, $products)){
            unset($products[$product_id]);

        }
        $cookie = Cookie::make('cart',serialize($products), 10080);

        return redirect()->route('cart')
        ->cookie($cookie);


    }
}
