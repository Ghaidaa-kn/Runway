@extends('master')
@section('content')

<div class="container customer-login">
  <div class="row">
    <div style="margin-left: 25%;"  class="col-sm-5 col-sm-offset-4">
      <h2 style="text-align: center;color: rgb(93, 93, 95);">Designer Register</h2>
      <form action="/designer_register" method="POST">
        {{ csrf_field() }}
        <div class="mb-3">
            <input type="text" name="username" class="form-control" id="username" placeholder="UserName">
        </div>
        <div class="mb-3">
            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
        </div>
        <div class="mb-3">
            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
        </div>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="mb-3">
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
        </div>
        <div class="mb-3">
            <input type="text" name="address" class="form-control" id="address" placeholder="Address">
        </div>
        <div class="mb-3">
            <input type="number" min="0" max="150" step="1" name="age" class="form-control" id="age" placeholder="Age">
        </div>
        <div class="mb-3">
            <input type="number" min="0" max="70" step="1" name="experience" class="form-control" id="experience" placeholder="Experience">
        </div>
        <div class="form-check" style="margin-left: 50px;">
              <input style="margin-top: 25px;" class="form-check-input" type="radio"name="gender" value="m" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                  Male
              </label>
            </div>
            <div class="form-check" style="margin-left: 50px;">
              <input style="margin-top: 25px;" class="form-check-input" type="radio"name="gender" value="f" id="flexCheckChecked" checked>
              <label class="form-check-label" for="flexCheckChecked">
                  Female
              </label>
            </div>
        <button style="margin-top: 20px; margin-left: 20%;" type="submit" class="btn btn-primary">Register</button>
      </form>

    </div>
  </div>
</div>



@endsection

