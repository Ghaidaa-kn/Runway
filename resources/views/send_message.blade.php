@extends('master')
@section('content')

<div class="container customer-login">
  <div class="row">
    <div class="col-sm-5 col-sm-offset-4">
      
      <form action="/add_message" method="POST">
        {{ csrf_field() }}
        <div class="mb-3">
            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
        </div>
        <div class="mb-3">
            <input type="text" name="message" class="form-control" id="message" placeholder="Let's have a talk">
        </div>
        <div class="mb-3">
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
        </div>
        <div class="mb-3">
            <label for="type">Type of message:</label>
            <select name="type" id="type">
              <option value="complaint">complaint</option>
              <option value="suggestion">suggestion</option>
              <option value="message">message</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
      </form>

    </div>
  </div>
</div>

@endsection

