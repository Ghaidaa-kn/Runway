@extends('master')
@section('content')

<section id="product1" id="heroo">
    <div class="pro-container">
        @foreach($orders as $order)
            <div class="pro">
                <img style="width: 225px;height: 300px;" src="{{ asset('storage/img/'.$order->image) }}" alt="">
                <div class="description">
                    <p>Order Number : {{$order->orderNumber}}</p>
                    <span>Brand :{{$order->brand_name}}</span>
                    <h5>{{$order->type}}</h5>
                    <h6>{{$order->category}}</h6>
                   
                    <h4>Orginal Price : {{$order->price}} SP</h4>
                    <h4>Date : {{$order->created_at}}</h4>
                </div>
            </div>
        @endforeach
    </div>
    
</section> 

@endsection