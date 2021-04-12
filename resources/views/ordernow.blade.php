@extends('master')
@section('content')

<div class="custom-product">

  <div class="col-sm-10">
    <table class="table table-striped">
    <thead>
      <tr>
        <td>Price</td>
        <td>{{$total}} Rupees</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tax</td>
        <td>0 Rupees</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>100</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$total+100}}</td>
      </tr>
    </tbody>
  </table>

  <form action="orderplace" method="post">
    @csrf
  <div class="form-group">
    <textarea  class="form-control" placeholder="Enter Your Address" name="address"></textarea>
  </div>
  <div class="form-group">
    <label for="">Pyment Method</label>
    <p><input type="radio" value="cash" name="payment"> <span>Online Payment</span></p>
    <p><input type="radio" value="cash" name="payment"> <span>EMI Payment</span></p>
    <p><input type="radio" value="cash" name="payment"> <span>Payment on Delivey</span></p>
  </div>
  <button type="submit" class="btn btn-default">Order Now</button>
</form>

  </div>

</div>

@endsection