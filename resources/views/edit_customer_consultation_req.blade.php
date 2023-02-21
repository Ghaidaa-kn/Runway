@extends('master')
@section('content')

<form action="/add_customer_advice/{{$request->id}}" method="POST">
    {{ csrf_field() }}
    <h2>{{$request->customer_id}}</h2>
    <h3>{{$request->consultation}}</h3>
    <input type="text" name="advice" placeholder="Advise here...">
    {{-- <button style="color: red;">Send</button> --}}
    <br>
    <button style="margin-left: 35%;" type="submit" class="btn btn-success">Send</button>
</form>


@endsection