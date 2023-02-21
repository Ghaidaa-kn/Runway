@extends('master')
@section('content')
<div style="padding-top: 50px; margin-left: 30%;">
<div class="container customer-login">
  <div class="row">
    <div class="col-sm-5 col-sm-offset-4">
      
      <form action="/add_material" method="POST">
        {{ csrf_field() }}
        <div class="mb-3">
            <input type="text" name="name" class="form-control" id="name" placeholder="Material Name">
        </div>
        <div class="mb-3">
            <input type="number" min="0.1" step="0.0001" name="price" class="form-control" id="price" placeholder="Price">
        </div>
        <div class="mb-3">
            <input type="text" name="description" class="form-control" id="description" placeholder="Description">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>

    </div>
  </div>
</div>
</div>
@endsection

