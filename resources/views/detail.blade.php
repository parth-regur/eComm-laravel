@push('title')
    <title>eComm - {{$product['name']}} Details</title>
@endpush

@extends('master')
@section('content')

<div class="row pt-3">
    <div class="col-sm-6">
        <img src="{{$product['gallery']}}" width="400" />
    </div>
    <div class="col-sm-6">
        <a href="/">Go Back</a>
        
        <div class="pt-2">
            <h2>{{$product['name']}}</h2>
            <h3>Price : {{$product['price']}}</h3>
            <h4>Details : {{$product['description']}}</h4>
            <h4>Category : {{$product['category']}}</h4>
            
            <form action="/add_to_cart" method="POST" class="pt-3">
                @csrf
                <input type="hidden" name="productId" value="{{$product['id']}}">
                <button class="btn btn-success">Add To Cart</button>

            </form>
            <br>
            <button class="btn btn-primary">Buy Now</button>

        </div>
    </div>
</div>

@endsection