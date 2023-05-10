<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all(); //to get all data from DB
        return view('product',['products'=>$data]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->userId = $req->session()->get('user')['id'];
            $cart->productId = $req->productId;
            $cart->save();

            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }

    }
}
