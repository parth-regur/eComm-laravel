<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
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
        if(Session::has('user'))
        {
            $userId = Session::get('user')['id'];

            $products = DB::table('cart')
            ->join('products','cart.productId','=','products.id')
            ->where('cart.userId',$userId)
            ->select('products.*','cart.id AS cartId')
            ->get();

            return view('cartlist',['products'=>$products]);
        }
        
        return redirect('/');
        
    }

    function removeCartItem($id)
    {
        Cart::destroy($id);
        
        return redirect('cartlist');   
    }

    function orderNow()
    {
        $userId = Session::get('user')['id'];

        $totalAmount = DB::table('cart')
        ->join('products','cart.productId','=','products.id')
        ->where('cart.userId',$userId)
        ->sum('products.price');

        return view('ordernow',['totalAmount'=>$totalAmount]);
    }

    function orderPlace(Request $req)
    {
        $userId = Session::get('user')['id'];

        $allCart = Cart::where('userId',$userId)->get();

        foreach($allCart as $cart)
        {
            $order = new Order();
            $order->productId = $cart->productId;
            $order->userId = $cart->userId;
            $order->status = "pending";
            $order->paymentMethod = $req->payment;
            $order->paymentStatus = "pending";
            $order->address = $req->address;
            $order->created_at = DATE('Y-m-d H:i:s');
            $order->updated_at = DATE('Y-m-d H:i:s');
            $order->save();

            Cart::where('userId',$userId)->delete();

        }
        return redirect('/');
    }

    function myOrders()
    {
        if(Session::has('user'))
        {

            $userId = Session::get('user')['id'];

            $orders =  DB::table('orders')
            ->join('products','orders.productId','=','products.id')
            ->where('orders.userId',$userId)
            ->get();

            return view('myorders',['orders'=>$orders]);
        }

        return redirect('/');
    }

    public function myOrderFilter(Request $request)
    {
        if (Session::has('user')) {
            $userId = Session::get('user')['id'];
            
            $query = DB::table('orders')
                ->join('products', 'orders.productId', '=', 'products.id')
                ->where('orders.userId', $userId);
            
            $sort = $request->input('sort');
            
            // Perform the necessary logic based on the selected filter option
            if ($sort === 'newest') {
                $query->orderBy('orders.created_at', 'desc');
            } elseif ($sort === 'high') {
                $query->orderBy('products.price', 'desc');
            } elseif ($sort === 'low') {
                $query->orderBy('products.price', 'asc');
            } elseif ($sort === 'old') {
                $query->orderBy('orders.created_at', 'asc');
            }
            
            $orders = $query->get();
            
            return view('myorders', ['orders' => $orders]);
        }

        return redirect('/');
    }


}
