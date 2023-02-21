@extends('master')
@section('content')
<div style="padding-left: 25%;">
<section id="art">
@foreach($designs as $design)
<div class="card mb-3" style="max-width: 540px;">
	<div class="row g-0">
	  <div class="col-md-4">
		<img src="{{asset('storage/img/'.$design->image)}}">
	  </div>
	  <div class="col-md-8">
		<div class="card-body">
			<div class="card-body">
				<p>{{$design->name}}</p>
		<p>{{$design->first_name}} {{$design->last_name}}</p>
		<p>{{$design->type}}</p>
		<p>{{$design->category}}</p>
		<p>{{$design->created_at}}</p>
			</div>
		
		</div>
	  </div>
	</div>
  </div>
  <br>
  <br>

@endforeach
</section>
</div>

@endsection