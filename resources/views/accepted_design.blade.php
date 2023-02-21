@extends('master')
@section('content')

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
	<p>Status : Rejected</p>
	@endif
    @if($design->status == 1)
	<p>Status : Accepted</p>
	<p>Stage : Preparing</p>
	@endif
@endif

@if($design->price != null)
    <p>Price : {{$design->price}}</p>
@endif

<p>Upload Design Photo</p>
<form action="/upload_design_photo/{{$design->id}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="image" accept="image/*">
    {{-- <button style="color: red;">Submit</button> --}}
    <br>
    <button style="margin-left: 35%;" type="submit" class="btn btn-success">Send</button>
</form>


@endsection