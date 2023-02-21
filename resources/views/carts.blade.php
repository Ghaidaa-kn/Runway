@extends('master')
@section('content')

<div class="container"><br>
    <a class="btn btn-danger" href="/"><b>GO BACK</b></a>


    @foreach($all as $one)
    <div class="card" style="width: 100%;">
      <img style="width: 250px;height: 300px;" class="detail-img" src="{{ asset('storage/img/'.$one->image) }}"/>
      <div style="width: 80%;" class="card-body">
        <h4>{{$one->name}}</h4>
        <h4>{{$one->description}}</h4>
        <h4>Unit Price :{{$one->unit_price}}</h4>
        <h4>Quantity : {{$one->quantity}}</h4>
        <h4>Total Price :{{$one->total_price}}$</h4>
        @if($one->discount != null)
            <h4>+ Discount : {{$one->discount}}% </h4>
        @endif
        <br>
        <a href="/delete_cart/{{$one->cart_id}}" class="btn btn-warning">Remove From List Cart</a>
      </div>
    </div>
    @endforeach


    @if(count($all) != 0)
        <a class="btn btn-success float" href="/order_now">Order Now</a>
    @endif
    <br> <br>
</div>

@endsection