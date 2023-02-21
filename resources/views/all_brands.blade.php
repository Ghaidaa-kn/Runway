@extends('master')
@section('content')


@foreach($brands as $brand)
<div class="card w-75">
    <div class="card-body">
        <span>{{$brand->name}}</span>
    <h4>{{$brand->description}}</h4>
     
    </div>
  </div>
    <hr>
    
@endforeach

@endsection