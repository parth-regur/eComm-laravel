@extends('layouts.main')

@push('title')
    <title>Form</title>
@endpush

@section('main-section')

    <form action="{{url('/')}}/register" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" placeholder="" aria-describedby="helpId">
            {{-- <small id="helpId" class="text-muted">Help text</small> --}}
        </div>
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="name" class="form-control" placeholder="" aria-describedby="helpId">
            {{-- <small id="helpId" class="text-muted">Help text</small> --}}
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="" aria-describedby="helpId">
            {{-- <small id="helpId" class="text-muted">Help text</small> --}}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection