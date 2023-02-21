@extends('master')
@section('content')

<h1 style="color: rgb(71, 69, 69);margin-left: 40%;">All customers</h1> 
{{-- <div  class="card w-75">
<div style="padding-bottom: 10px;" class="card-body"> --}}
@foreach($customers as $customer)
<div  class="card w-75">
    <div style="padding-top: 5%;"  class="card-body">
<p>{{$customer->username}}</p>
<p>{{$customer->first_name}} {{$customer->last_name}}</p>
<p>{{$customer->email}}</p>
<p>{{$customer->phone}}</p>
<p>{{$customer->address}}</p>
<p>{{$customer->age}}</p>
<p>{{$customer->gender}}</p>
<form action="/block_unblock/{{$customer->id}}/{{$customer->is_blocked}}/customer" 
	method="POST">
    {{ csrf_field() }}
    <button type="submit"  style="background-color: red">
        @if($customer->is_blocked == 0)
            Block
        @elseif($customer->is_blocked == 1)
            UnBlock
        @endif
    </button>
</form>
<hr>
</div>
</div>

{{-- <div class="card w-75">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Button</a>
    </div>
  </div> --}}
@endforeach
<br>
{{-- </div>
</div> --}}
@endsection