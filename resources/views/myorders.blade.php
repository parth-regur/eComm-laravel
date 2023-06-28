@extends('master')
@section('content')

<div class="container pt-2">

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
                <div class="mr-1"><img class="rounded" src="{{$item->gallery}}" width="150"></div>
                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">{{$item->name}}</span>
                    <div class="d-flex flex-row">
                        <h5 class="text-grey ">Price : $ {{$item->price}}</h5>
                        <h5 class="text-grey ">$ {{$item->price}}</h5>
                        <h5 class="text-grey ">$ {{$item->price}}</h5>
                        <h5 class="text-grey ">$ {{$item->price}}</h5>
                    </div>
                </div>
            </div>
            
            @endforeach
        </div>
    </div>

</div>

    
@endsection