@extends('master')
@section('content')

@foreach($requests as $request)

<div class="card w-75">
    <div class="card-body">
        <p>Request Number #{{$request->id}}</p>
        <p>Designer : {{$request->first_name}} {{$request->last_name}}</p>
        <p>Created Date : {{$request->created_at}}</p>
      <a href="/edit_customer_design_request/{{$request->id}}" class="btn btn-primary">Preview</a>
    </div>
    
  </div>
  <br>
    <br>

@endforeach

@endsection