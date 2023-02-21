@extends('master')
@section('content')

<form action="/product_manager_login" method="POST" style="width: 70%;padding: 100px; padding-left: 20%;">
  {{ csrf_field() }}
  <h1 style="text-align: center; margin-bottom: 50px; color: rgb(93, 93, 95);"> Product Manager Login</h1>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email"name= "email" class="form-control" id="inputEmail3"placeholder="Email" 
      aria-describedby="emailHelp">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password"name="password" class="form-control" id="inputPassword3"placeholder="Password">
    </div>
  </div> 

  
  <button type="submit" style="margin-left: 35%;" class="btn btn-primary">LOG IN</button>
</form> 


@endsection
