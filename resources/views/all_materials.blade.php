@extends('master')
@section('content')


@foreach($materials as $material)
<div class="card w-75">
    <div class="card-body">
        <span>{{$material->name}}</span>
        <h4>{{$material->description}}</h4>
        <h4>{{$material->price}}</h4>
     
    </div>
  </div>
    <hr>
    
@endforeach

@endsection