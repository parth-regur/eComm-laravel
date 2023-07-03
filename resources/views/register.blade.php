@push('title')
    <title>eComm - Registration</title>
@endpush

@extends('master')
@section('content')

<div class="row mt-100">
    <div class="col-sm-4 mx-auto">

        <form action="{{url('/')}}/register" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputName">Username</label>
                <input type="text" name="name" class="form-control" id="exampleInputName">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>

    </div>
</div>
    
@endsection