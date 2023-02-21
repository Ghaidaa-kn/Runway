@extends('master')
@section('content')

<button><a href="/products">Go back</a></button>
<section id="pro-details"  class="sec-1">
    <div class="single-pro-image">
        <img src="{{ asset('storage/img/'.$product->image) }}" width="100%" id="mainimage" alt="">
        <div class="small-image-group">
            <div class="small-image-col">
                <img src="img/hijab1.jpg"width="100%" class="small-img" alt="">
            </div>
            <div class="small-image-col">
                <img src="img/hijab2.jpg"width="100%" class="small-img" alt="">
            </div>
            <div class="small-image-col">
                <img src="img/hijab3.jpg"width="100%" class="small-img" alt="">
            </div>
            <div class="small-image-col">
                <img src="img/hijab4.webp"width="100%" class="small-img" alt="">
            </div>
        </div>
    </div>
    <?php $sizes = explode(',',$product->available_sizes);?>
    <?php $colors = explode(',',$product->colors);?>
        <div class="singl-pro-det">
            <h1>{{$product->name}}</h1>
            <h4>{{$product->brand_name}}</h4>
            <h4>{{$product->type}}</h4>
            <h4>{{$product->category}}</h4>
            @if($product->discount != null)
            <h2>With Discount {{$product->discount}}%</h2>
            @endif
            <h2>Price : {{$product->price}}</h2>
            <form action="/add_to_cart" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <input type="hidden" name="price" value="{{$product->price}}">
                <label for="size">Available Sizes:</label>
                <select name="size" id="size">
                    @foreach($sizes as $key => $value)
                         <option value="{{$value}}">{{$value}}</option>
                    @endforeach
                </select>
                <label for="color">Available Color:</label>
                <select name="color" id="color">
                    @foreach($colors as $key => $value)
                         <option value="{{$value}}">{{$value}}</option>
                    @endforeach
                </select>
                @if(session('role') == 'customer')
                <input type="number" name="quantity" id="quantity" value="1" placeholder="1" min="1" step="1">
                
                {{-- <button  class="btn btn-secondary btn-lg" >ADD TO CART</button> --}}
                <br>
                <button style="margin-left: 10%;"  type="submit" class="btn btn-success">ADD TO CART</button>
                @endif
            </form>
            
            <h4>Product Description</h4>
            <span>{{$product->description}}</span>
            </span>
        </div>
</section>

<div>
    <label>Comments :</label>
    @foreach($comments as $comment)
    <h3>{{$comment->username}}</h3>
    <p>{{$comment->comment}}</p>
    <h5>{{$comment->date}}</h5>
    <br>
    @endforeach
</div>
@if(session('role') == 'customer')
<div>
    <form action="/add_comment" method="POST">
        {{ csrf_field() }}
        <input type="text" name="comment" id="comment" placeholder="Type Your Comment">
        <input type="hidden" name="product_id" value="{{$product->id}}">
        {{-- <button>Send</button> --}}
        <br>
        <button style="margin-left: 40%;"  type="submit" class="btn btn-success">Send</button>
    </form>
</div>
@endif

@endsection