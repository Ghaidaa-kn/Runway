@extends('master')
@section('content')
<div style="padding-top: 75px; margin-left: 30  %;">
<div class="container add_article">
  <div class="row">
    <div class="col-sm-5 col-sm-offset-4">
      
      <form action="/add_article" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3">
            <input type="text" name="title" class="form-control" id="title" placeholder="Article Title">
        </div>
        <select id="type" name="type" onchange="type_change()">
          <option value="public">Public</option>
          <option value="product">Product</option>
          <option value="brand">Brand</option>
        </select>
        <div class="mb-3">
            <input type="text" name="content" class="form-control" id="content" placeholder="Type Your  Article">
        </div>
        <div class="mb-3" id="product_section" hidden="hidden">
          <label for="brand">Choose a Product :</label>
          <select name="product" id="product">
            @foreach($products as $product)
            <option value="{{$product->id}}">{{$product->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3" id="brand_section" hidden="hidden">
          <label for="brand">Choose a Brand :</label>
          <select name="brand" id="brand">
            @foreach($brands as $brand)
            <option value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
            <input type="file" name="article_img" id="article_img" class="form-control-file" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>

    </div>
  </div>
</div>
</div>
@endsection

<script type="text/javascript">
   function type_change(){
    if($('#type').val() == 'product'){
      $('#product_section').removeAttr('hidden');
      $('#brand_section').attr('hidden' , 'hidden');
    }else if($('#type').val() == 'brand'){
      $('#brand_section').removeAttr('hidden');
      $('#product_section').attr('hidden' , 'hidden');
    }else if($('#type').val() == 'public'){
      $('#product_section').attr('hidden' , 'hidden');
      $('#brand_section').attr('hidden' , 'hidden');
    }
  }
</script>

