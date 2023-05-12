<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;

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

    static function cartItems()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('userId',$userId)->count();
    }

    function cartlist()
    {
        $userId = Session::get('user')['id'];

        $products = DB::table('cart')
        ->join('products','cart.productId','=','products.id')
        ->where('cart.userId',$userId)
        ->select('products.*','cart.id AS cartId')
        ->get();

        return view('cartlist',['products'=>$products]);
    }

    function removeCartItem($id)
    {
        Cart::destroy($id);
        
        return redirect('cartlist');   
    }
}
