@extends('master')
@section('content')
<div style="padding-top: 50px; margin-left: 30%;">
<div class="container customer-login">
  <div class="row">
    <div class="col-sm-5 col-sm-offset-4">
      
      <form action="/add_product" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3">
            <input type="text" name="name" class="form-control" id="name" placeholder="Product Name"><!--minlength="6"-->
        </div>
        <div class="mb-3">
            <input type="text" name="type" class="form-control" id="type" placeholder="Type">
        </div>
        <div class="mb-3">
            <input type="text" name="category" class="form-control" id="category" placeholder="Category">
        </div>
        <div class="mb-3">
            <input type="text" name="kind" class="form-control" id="kind" placeholder="Kind">
        </div>
        <div class="mb-3">
            <input type="number" min="0.1" step="0.0001" name="price" class="form-control" id="price" placeholder="Price">
        </div>
        <div class="mb-3">
            <input type="text" name="description" class="form-control" id="description" placeholder="Description">
        </div>
        <div class="mb-3">
            <input type="text" name="sizes" class="form-control" id="sizes" placeholder="Available Sizes">
        </div>
        <div class="mb-3">
            <input type="text" name="colors" class="form-control" id="colors" placeholder="Colors">
        </div>
        <div class="mb-3">
            <label for="brand">Choose a Brand:</label>
            <select name="brand" id="brand">
              @foreach($brands as $brand)
              <option value="{{$brand->id}}">{{$brand->name}}</option>
              @endforeach
            </select>
        </div>
        <div class="mb-3">
          <input type="file" name="product_img" id="product_img" class="form-control-file" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>

    </div>
  </div>
</div>
</div>

@endsection

