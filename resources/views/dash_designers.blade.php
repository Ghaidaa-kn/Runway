@extends('master')
@section('content')

<h1 style="color: rgb(71, 69, 69);margin-left: 40%;">All Designers</h1>

@foreach($designers as $designer)
<div class="card w-75">
    <div class="card-body">
<p>{{$designer->username}}</p>
<p>{{$designer->first_name}} {{$designer->last_name}}</p>
<p>{{$designer->email}}</p>
<p>{{$designer->phone}}</p>
<p>{{$designer->address}}</p>
<p>{{$designer->age}}</p>
<p>{{$designer->gender}}</p>
<p>{{$designer->experience_years}}</p>
<form action="/block_unblock/{{$designer->id}}/{{$designer->is_blocked}}/designer" 
	method="POST">
    {{ csrf_field() }}
    <button type="submit" style="background-color: red">
        @if($designer->is_blocked == 0)
            Block
        @elseif($designer->is_blocked == 1)
            UnBlock
        @endif
    </button>
</form>
<hr>
</div>
</div>
@endforeach
   
@endsection