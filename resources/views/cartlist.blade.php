@push('title')
    <title>eComm - Cart List</title>
@endpush

@extends('master')
@section('content')

<div class="container pt-2">

    <div class="d-flex justify-content-center row">
        <div class="col-md-12">
            <div class="p-2">
                <div class="d-flex">
                    <h4>Shopping cart</h4>
                    <a href="/" class="btn btn-sm btn-primary ml-auto">Continue Shopping</a>
                </div>
                <div class="d-flex flex-row align-items-center pull-right"><span class="mr-1">Sort by:</span><span class="mr-1 font-weight-bold">Price</span><i class="fa fa-angle-down"></i></div>
            </div>

            @foreach ($products as $item)

            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                <div class="mr-1"><img class="rounded" src="{{$item->gallery}}" width="70"></div>
                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">{{$item->name}}</span>
                    <div class="d-flex flex-row product-desc">
                        <div class="size mr-1"><span class="text-grey">Category:</span><span class="font-weight-bold">&nbsp;{{$item->category}}</span></div>
                        <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                    <h5 class="text-grey mt-1 mr-1 ml-1">2</h5><i class="fa fa-plus text-success"></i></div>
                <div>
                    <h5 class="text-grey">$ {{$item->price}}</h5>
                </div>
                <div class="d-flex align-items-center">
                    <a href="remove_cart_item/{{$item->cartId}}"><i class="fa fa-trash mb-1 text-danger"></i></a>
                </div>
            </div>
            
            @endforeach

            <!-- <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><input type="text" class="form-control border-0 gift-card" placeholder="discount code/gift card"><button class="btn btn-outline-warning btn-sm ml-2" type="button">Apply</button></div>-->
            <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded">
                <a href="order_now" class="btn btn-success">Order Now</a>
            </div> 
        </div>
    </div>

</div>

    
@endsection