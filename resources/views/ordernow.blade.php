@extends('master')
@section('content')

<div class="container pt-2">

    <table class="table">
        <tbody>
            <tr>
                <td>Total</td>
                <td>${{$totalAmount}}</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$0</td>
            </tr>
            <tr>
                <td>Delivery Charges</td>
                <td>$10</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>{{$totalAmount+10}}</td>
            </tr>
        </tbody>
    </table>

    <div>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
                <textarea class="form-control" name="address" placeholder="Enter your address"></textarea>
            </div>
            <div class="form-group">
                <label for="pwd">Payment Method:</label>
                <input type="radio" value="cash" name="payment"> <span>Online Payment</span>
                <input type="radio" value="cash" name="payment"> <span>EMI Payment</span>
                <input type="radio" value="cash" name="payment"> <span>COD</span>
            </div>
            <button type="submit" class="btn btn-primary">Order Now</button>
        </form>
    </div>
</div>

    
@endsection