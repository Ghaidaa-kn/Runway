@extends('master')
@section('content')

@foreach($products as $product)
    {{-- <div class="pro">
        <img src="{{ asset('storage/img/'.$product->image) }}" alt="" width="100">
        <h4>Brand : {{$product->brand_name}}</h4>
        <h4>Product Name : {{$product->name}}</h4>
        <h4>Type : {{$product->type}}</h4>
        <h4>Category : {{$product->category}}</h4>
        <h4>Kind : {{$product->kind}}</h4>
        <h4>Price : {{$product->price}} SP</h4>
        <h4>Description : {{$product->description}}</h4>
        <h4>Available Colors : {{$product->colors}}</h4>
        <h4>Available Sizes : {{$product->available_sizes}}</h4>
    </div>
    <hr> --}}
    <div class="card mb-3" style="max-width: 100%;;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('storage/img/'.$product->image) }}" alt="" width="80%;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <div class="card-body">
                    <h4>Brand : {{$product->brand_name}}</h4>
                    <h4>Product Name : {{$product->name}}</h4>
                    <h4>Type : {{$product->type}}</h4>
                    <h4>Category : {{$product->category}}</h4>
                    <h4>Kind : {{$product->kind}}</h4>
                    <h4>Price : {{$product->price}} SP</h4>
                    <h4>Description : {{$product->description}}</h4>
                    <h4>Available Colors : {{$product->colors}}</h4>
                    <h4>Available Sizes : {{$product->available_sizes}}</h4>
                </div>
            
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
@endforeach

@endsection