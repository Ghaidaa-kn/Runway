@extends('master')
@section('content')

<div class="container customer-login">
  <div class="row">
    <div class="col-sm-5 col-sm-offset-4">
      <p>Admin Register</p>
      <form action="/admin_register" method="POST">
        {{ csrf_field() }}
        <div class="mb-3">
          <input type="email" name= "email" class="form-control" id="email" placeholder="Email" 
          aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="mb-3">
          <input type="number" name="is_super_admin" class="form-control" id="is_super_admin" placeholder="Is Super Admin">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>

    </div>
  </div>
</div>

@endsection