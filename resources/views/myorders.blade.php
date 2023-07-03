@extends('master')
@section('content')

<div class="d-flex justify-content-center row">
    <div class="col-md-12">
        <div class="p-2">
            <div class="d-flex">
                <h4>My Orders</h4>

                <form method="GET" class="ml-auto" action="{{ url('/filter') }}">
                    <div class="dropdown open">
                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="sortBy" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sort By
                        </button>
                        <div class="dropdown-menu" aria-labelledby="sortBy">
                            <button class="dropdown-item" type="submit" name="sort" value="newest">Newest</button>
                            <button class="dropdown-item" type="submit" name="sort" value="high">Price (High to Low)</button>
                            <button class="dropdown-item" type="submit" name="sort" value="low">Price (Low to High)</button>
                            <button class="dropdown-item" type="submit" name="sort" value="old">Old</button>
                        </div>
                    </div>
                </form>

            </div>
            
                        
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