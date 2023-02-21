@extends('master')
@section('content')

@foreach($all as $one)
<div style="margin-left: 30%; margin-top: 5%;" class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <p>Request number #{{$one->id}}</p>
        <p>From : {{$one->first_name}} {{$one->last_name}}</p>
        <a href="/edit_request_design/{{$one->id}}" class="btn btn-primary">Edit</a>
        
      </div>
    </div>
  </div>
@endforeach

@endsection