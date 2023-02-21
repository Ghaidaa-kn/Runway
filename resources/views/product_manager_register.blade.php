@extends('master')
@section('content')
{{-- <div style="padding-top: 50px; margin-left: 30%;"> --}}
<div class="container customer-register">
  <div class="row">
    <div style="margin-left: 30%;" class="col-sm-5 col-sm-offset-4">
      <h1 style="color: rgb(71, 71, 74)">Product Manager Register</h1>
      <form action="/product_manager_register" method="POST">
        {{ csrf_field() }}
        <div class="mb-3">
          <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
        </div>
        <div class="mb-3">
          <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
        </div>
        <div class="mb-3">
          <input type="text" name="username" class="form-control" id="username" 
          placeholder="UserName">
        </div>
        <div class="mb-3">
          <input type="email" name= "email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="mb-3">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="mb-3">
          <input type="text" name="phone" class="form-control" id="phone" 
          placeholder="Phone">
        </div>
        <div class="mb-3">
          <input type="text" name="address" class="form-control" id="address" 
          placeholder="Address">
        </div>
        <button style="margin-left: 25%;" type="submit" class="btn btn-primary">Register</button>
      </form>

    </div>
  </div>
</div>
{{-- </div> --}}

@endsection

