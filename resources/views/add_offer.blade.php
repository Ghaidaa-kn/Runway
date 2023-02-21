@extends('master')
@section('content')

<div  class="container customer-login">
  <div class="row">
    <div style="margin-left: 25%;" class="col-sm-5 col-sm-offset-4">
      <h1 style="color: rgb(81, 79, 79); margin-left: 40%;">Add Offer</h1>
      <form action="/make_offer" method="POST">
        {{ csrf_field() }}
        <div class="mb-3">
            <input type="type" name="description" class="form-control" id="description" placeholder="Description">
        </div>
        <div class="mb-3">
            <input type="number" min="0.1" step="0.1" name="discount" class="form-control" id="discount" placeholder="Discount">
        </div>
        <div class="mb-3">
            <input type="date" name="start_date" class="form-control" id="start_date">
        </div>
        <div class="mb-3">
            <input type="date" name="end_date" class="form-control" id="end_date">
        </div>
        <div class="mb-3">
            @foreach($available_products as $product)
                <input type="checkbox" name="product_offer[]" value="{{$product->id}}">{{$product->name}}<br> 
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>

    </div>
  </div>
</div>

@endsection

