@extends('master')
@section('content')

@foreach($requests as $req)
<div style="margin-left: 20%; margin-top: 5px;" class="card w-75" >
    <div class="card-body">
        <a href="/edit_customer_req/{{$req->id}}">
            <h3>#{{$req->id}}</h3>
            <h3>From : {{$req->customer_id}}</h3>
            <p>Date : {{$req->created_at}}</p>
            </a>
    </div>
    
  </div>
    {{-- <div style="margin-left: 20%; margin-top: 5px;" class="card w-75" >
        <div class="card-body">
            <a href="/edit_customer_req/{{$req->id}}">
                <h3>#{{$req->id}}</h3>
                <h3>From : {{$req->customer_id}}</h3>
                <p>Date : {{$req->created_at}}</p>
                </a>
        </div>
        
      </div> --}}
@endforeach

@endsection