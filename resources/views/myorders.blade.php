@extends('master')
@section('content')

<div class="d-flex justify-content-center row">
    <div class="col-md-12">
        <div class="p-2">
            <div class="d-flex">
                <h4>My Orders</h4>
                <a href="/" class="btn btn-sm btn-primary ml-auto">Continue Shopping</a>
            </div>
            <div class="d-flex flex-row align-items-center pull-right"><span class="mr-1">Sort by:</span><span class="mr-1 font-weight-bold">Price</span><i class="fa fa-angle-down"></i></div>
        </div>

        @foreach ($orders as $item)

        <div class="d-flex flex-row align-items-center p-2 bg-white mt-4 px-3 rounded">
            <div class="mr-1">
                <img class="rounded" src="{{$item->gallery}}" width="150">
            </div>
            
            <div class="flex-row">
                <span class="font-weight-bold">{{$item->name}}</span>
                <h6>Price : $ {{$item->price}}</h6>
                <h6>Delivery Status : {{$item->status}}</h6>
                <h6>Address : {{$item->address}}</h6>
                <h6>Payment Status : {{$item->paymentStatus}}</h6>
                <h6>Payment Method : {{$item->paymentMethod}}</h6>
            </div>
            
        </div>
        <hr/>
        @endforeach
    </div>
</div>

    
@endsection