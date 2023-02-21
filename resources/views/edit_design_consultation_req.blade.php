@extends('master')
@section('content')

<form action="/add_designer_advice/{{$request->id}}" method="POST">
    {{ csrf_field() }}
    <h2>{{$request->designer_id}}</h2>
    <h3>{{$request->consultation}}</h3>
    <input type="text" name="advice" placeholder="Advise here...">
    {{-- <button>Send</button> --}}
    <br>
    <button style="margin-left: 35%;" type="submit" class="btn btn-success">Send</button>
</form>

@endsection