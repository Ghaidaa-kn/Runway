@extends('master')
@section('content')

<h1 style="color: rgb(71, 69, 69);margin-left: 40%;">All Fashion Experts</h1>

@foreach($experts as $expert)
<div class="card w-75">
    <div class="card-body">
<p>{{$expert->username}}</p>
<p>{{$expert->first_name}} {{$expert->last_name}}</p>
<p>{{$expert->email}}</p>
<p>{{$expert->phone}}</p>
<p>{{$expert->address}}</p>
<p>{{$expert->age}}</p>
<p>{{$expert->gender}}</p>
<p>{{$expert->experience_years}}</p>
<form action="/block_unblock/{{$expert->id}}/{{$expert->is_blocked}}/expert" 
	method="POST">
    {{ csrf_field() }}
    <button type="submit" style="background-color: red">
        @if($expert->is_blocked == 0)
            Block
        @elseif($expert->is_blocked == 1)
            UnBlock
        @endif
    </button>
</form>
<hr>
</div>
</div>
@endforeach
   
@endsection