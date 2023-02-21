@extends('master')
@section('content')

{{-- @if($design->image != null)
    <div class="single-pro-image">
        <img src="{{ asset('storage/img/'.$design->image) }}" width="30%" id="mainimage" alt="">
    </div>
@endif

<p>{{$design->first_name}}</p>
<p>{{$design->last_name}}</p>
<p>{{$design->phone}}</p>
<p>{{$design->email}}</p>
<p>Design Num : #{{$design->id}}</p>
<p>kind : {{$design->kind}}</p>
<p>category : {{$design->category}}</p>
<p>{{$design->date}}</p>
<p>payment_way : {{$design->payment_way}}</p>
<p>size : {{$design->size}}</p>
<p>color : {{$design->color}}</p>
@if($design->other_features != null)
    <p>other features : {{$design->other_features}}</p>
@endif
<h2>Needed Materials</h2>
@foreach($materials as $material)
    <p>{{$material->name}}</p>
    <p>{{$material->description}}</p>
@endforeach
<p>------------------------------</p>

@if($design->status != null)
	@if($design->status == 2)
	<p>Status : Rejected</p>
	@endif
    @if($design->status == 1)
	<p>Status : Accepted</p>
	<p>Stage : Preparing</p>
	@endif
@endif

@if($design->status == null)
<p>Status : Pending</p>
@endif

@if($design->price != null)
    <p>Price IS : {{$design->price}}</p>

@endif --}}
<div class="card w-75">
    <div class="card-body">
       
      @if($design->image != null)
    <div class="single-pro-image">
        <img src="{{ asset('storage/img/'.$design->image) }}" width="30%" id="mainimage" alt="">
    </div>
@endif

<p>{{$design->first_name}}</p>
<p>{{$design->last_name}}</p>
<p>{{$design->phone}}</p>
<p>{{$design->email}}</p>
<p>Design Num : #{{$design->id}}</p>
<p>kind : {{$design->kind}}</p>
<p>category : {{$design->category}}</p>
<p>{{$design->date}}</p>
<p>payment_way : {{$design->payment_way}}</p>
<p>size : {{$design->size}}</p>
<p>color : {{$design->color}}</p>
@if($design->other_features != null)
    <p>other features : {{$design->other_features}}</p>
@endif
<h4>Needed Materials</h4>
@foreach($materials as $material)
    <p>{{$material->name}}</p>
    <p>{{$material->description}}</p>
@endforeach
<p>------------------------------</p>

@if($design->status != null)
	@if($design->status == 2)
	<h1 style="margin-left: 30%;color: rgb(246, 76, 76);">Status : Rejected</h1>
	@endif
    @if($design->status == 1)
	<p>Status : Accepted</p>
	<p>Stage : Preparing</p>
	@endif
@endif

@if($design->status == null)
<h1 style="margin-left: 30%; color: rgb(232, 134, 43)">Status : Pending</h1>
@endif

@if($design->price != null)
    <p>Price IS : {{$design->price}}</p>

@endif
    </div>
    
  </div>
  <br>
    <br>

@endsection