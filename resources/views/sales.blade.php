@extends('master')
@section('content')

<label><h1 style="color: rgb(204, 80, 80)">SALES </h1></label>
<section id="product1" id="heroo" class="a">
    <div class="pro-container">
        @foreach($products as $product)
            <div class="pro">
                <img src="{{ asset('storage/img/'.$product->image) }}" alt="">
                <div class="description">
                    <span>{{$product->brand_name}}</span>
                    <h5>{{$product->type}}</h5>
                    <h6>{{$product->category}}</h6>
                    
                    <h4>{{$product->price}} SP</h4>
                </div>
                <a href="/product/{{$product->id}}"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        @endforeach
    </div>
</section> 

@endsection