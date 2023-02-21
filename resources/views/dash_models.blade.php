@extends('master')
@section('content')

<h1 style="color: rgb(71, 69, 69);margin-left: 40%;">All Models</h1>
@foreach($models as $model)
<div class="card mb-3" style="max-width: 540px;">
	<div class="row g-0">
	  <div class="col-md-4">
		<img src="{{ asset('storage/img/'.$model->photo) }}" width="90%;" id="mainimage" alt="">
	  </div>
	  <div class="col-md-8">
		<div class="card-body">
			<p>{{$model->first_name}} {{$model->last_name}}</p>
			<p>{{$model->skin}}</p>
			<p>{{$model->height}}</p>
			<p>{{$model->weight}}</p>
			<p>{{$model->email}}</p>
			<p>{{$model->phone}}</p>
			<p>{{$model->address}}</p>
		</div>
	  </div>
	</div>
  </div>
<hr>

@endforeach

<h2 style="color: rgb(74, 71, 71); margin-left: 10px;">Add new Model</h2>
<form action="/add_model" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
	<input type="text" name="first_name" placeholder="First Name" required>
	<input type="text" name="last_name" placeholder="Last Name" required>
	<input type="text" name="skin" placeholder="Skin" required>
	<input type="text" name="height" placeholder="Height" required>
	<input type="text" name="weight" placeholder="Weight" required>
	<input type="email" name="email" placeholder="Email" required>
	<input type="text" name="phone" placeholder="Phone Number" required>
	<input type="text" name="address" placeholder="Address" required>
	<label>Age : </label><input type="number" min="0" name="age" required>
	<input type="file" name="photo" id="photo" accept="image/*" required>
	{{-- <button>Add</button> --}}
	<br>
        <button style="margin-left: 40%;"  type="submit" class="btn btn-success">Add</button>
</form>

@endsection