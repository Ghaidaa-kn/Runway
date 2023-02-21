@extends('master')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Username </th>
      <th scope="col">Full name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Experience years</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$expert->username}}</th>
      <td>{{$expert->first_name}}  {{$expert->last_name}}</td>
      <td>{{$expert->email}}</td>
      <td>{{$expert->phone}}</td>
      <td>{{$expert->address}}</td>
      <td>{{$expert->experience_years}}</td>
    </tr>

  </tbody>
</table>


@if(session('role')== 'customer')
<h4 style="margin-left: 25%;">You can ask for consultation at any time : </h4>
<form style="margin-left: 20%;" action="/request_consultation" method="POST">
  {{ csrf_field() }}
  <textarea style="width: 50%;" name="consultation" id="consultation"></textarea>
  <input type="hidden" name="expert_id" value="{{$expert->id}}">
  {{-- <button>Send</button> --}}
  <br>
  <button style="margin-left: 10%;"  type="submit" class="btn btn-success">Send</button>
</form>
@endif

@if(session('role')== 'designer')
<h4 style="margin-left: 25%;">You can ask for design consultation at any time : </h4>
<form style="margin-left: 20%;" action="/request_design_consultation" method="POST">
  {{ csrf_field() }}
  <textarea style="width: 50%;"  name="consultation" id="consultation"></textarea>
  <input type="hidden" name="expert_id" value="{{$expert->id}}">
  <br>
  <button style="margin-left: 10%;"  type="submit" class="btn btn-success">Send</button>
</form>
@endif

<p>My Articles :</p>
<section id="art">
@foreach($articles as $article)
<div class="art-box">
      <div class="art-img">
          <img src="{{asset('storage/img/'.$article->image)}}">
      </div>
      <div class="art-det">
          <h4>{{$article->title}}</h4>
          @if($article->type == 'product')
          <p>About Product ...</p>
          @endif
          @if($article->type == 'brand')
          <p>About Brand ...</p>
          @endif
         <p>{{$article->content}}</p>
      </div>
  </div>
@endforeach
</section>

@endsection