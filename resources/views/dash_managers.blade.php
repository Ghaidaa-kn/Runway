@extends('master')
@section('content')

<h1>All Product Managers</h1>
@foreach($managers as $manager)
<p>{{$manager->first_name}} {{$manager->last_name}}</p>
<p>{{$manager->email}}</p>
<p>{{$manager->phone}}</p>
<p>{{$manager->address}}</p>
<form action="/block_unblock/{{$manager->id}}/{{$manager->is_blocked}}/manager" 
	method="POST">
    {{ csrf_field() }}
    <button type="submit" style="background-color: red">
        @if($manager->is_blocked == 0)
            Block
        @elseif($manager->is_blocked == 1)
            UnBlock
        @endif
    </button>
</form>
<hr>
@endforeach

@endsection