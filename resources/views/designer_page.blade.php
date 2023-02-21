@extends('master')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Username </th>
        <th scope="col">Full name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{$designer->username}}</th>
        <td>{{$designer->first_name}}  {{$designer->last_name}}</td>
        <td>{{$designer->email}}</td>
        <td>{{$designer->phone}}</td>
        <td>{{$designer->address}}</td>
      </tr>

    </tbody>
  </table>
<br>


<section id="product1" id="heroo" class="a">
    <div class="pro-container">
        @foreach($designs as $design)
            <div class="pro">
                <img src="{{ asset('storage/img/'.$design->image) }}" alt="">
                <div class="description">
                    <span>{{$design->name}}</span>
                    <h5>{{$design->type}}</h5>
                    <h6>{{$design->category}}</h6>
                    <h4>{{$design->first_name}} {{$design->last_name}}</h4>
                </div>
            </div>
        @endforeach
    </div>
</section> 

<br>
@if(session('role')== 'customer')
<p>If you want to order design</p>
<form action="/add_design_request" method="POST">
  {{ csrf_field() }}
  <input type="hidden" name="designer_id" value="{{$designer->id}}">
  <input type="text" name="kind" placeholder="kind">
  <input type="text" name="category" placeholder="category">
  <input type="text" name="size" placeholder="size">
  <input type="text" name="color" placeholder="color">
  <input type="text" name="other_features" placeholder="other_features">
  <div class="form-group">
        <label for="pwd">Payment Method :</label><br><br>
        <input type="radio" name="payment_way" value="Online Payment">
        <span>Online Payment</span><br>
        <input type="radio" name="payment_way" value="EMI Payment">
        <span>EMI Payment</span><br>
        <input type="radio" name="payment_way" value="Payment On Delivery">
        <span>Payment On Delivery</span><br><br><br>
  </div>
  <label>Material :</label>
  @foreach($materials as $material)
    <label for="{{$material->id}}">{{$material->name}}</label>
    <input type="checkbox" name="materials[]" id="{{$material->id}}" 
           value="{{$material->id}}"/>
  @endforeach
  <input type="date" name="date">
  {{-- <button style="color: rgb(8, 114, 31); margin-left: 35%;">Send</button> --}}
  <br>
  <button style="margin-left: 35%;" type="submit" class="btn btn-success">Send</button>
  
</form>
@endif

@endsection