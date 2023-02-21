@extends('master')
@section('content')

<div class="container">
	<a class="btn btn-danger" href="/"> <b>GO BACK</b> </a>
<br>
	<div class="col-sm-10">
		<table class="table">
	      <tr>
  		<td>Cost</td>
  		<td>$ {{$total_price}}</td>
	  </tr>
	  <tr>
  		<td>Tax</td>
  		<td>$ 0</td>
	      </tr>
	      <tr>
  		<td>Delivery</td>
  		<td>$ 10</td>
	      </tr>
	      <tr>
	  		 <td>Bank Card</td>
	  		 <td>{{$bank_card->code}}</td>
	       </tr>
    </table>
    <br> <br>
    <form action="/make_order" method="POST">
    	{{ csrf_field() }}
	    <div class="form-group">
	       <textarea class="form-control" name="address" placeholder="Enter Your Address ..."></textarea>
	    </div>
	    <br> <br>
	    <div class="form-group">
		    <label for="pwd">Payment Method :</label><br><br>
		    <input type="radio" name="payment_way" value="Online Payment"><span>Online Payment</span><br>
		    <input type="radio" name="payment_way" value="Payment On Delivery"><span>Payment On Delivery</span><br><br><br>
	    </div>
	    <button class="btn btn-success">Submit</button>
    </form>
	</div>
</div>

@endsection