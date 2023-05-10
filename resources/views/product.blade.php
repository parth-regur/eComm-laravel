@extends('master')
@section('content')


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        
        @foreach ($products as $item)

        <div class="carousel-item {{$item['id']==1?'active':''}}">
            <img class="slider-img" height="400" width="1135" src="{{$item['gallery']}}" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>{{$item['name']}}</h5>
                <p>{{$item['description']}}</p>
            </div>
        </div>
        
        @endforeach
        
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container pt-2">
    <h2>Trending Products</h2>
    <div class="row">
        @foreach ($products as $item)
        
            <div class="col-md-6 col-lg-4">
                <a href="detail/{{$item['id']}}">
                    <div class="card mb-4">
                        <img class="card-img-top" height="150" src="{{$item['gallery']}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$item['name']}}</h5>
                        </div>
                    </div>
                </a>
            </div>

        @endforeach
    </div>

</div>

    
@endsection