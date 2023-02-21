@extends('master')
@section('content')



<div class="card w-75">
    <div class="card-body">
        <h1>Messages</h1>
        @foreach($messages as $message)
        @if($message->type == 'message')
        <p>{{$message->sender_email}}</p>
        <p>{{$message->phone}}</p>
        <p>{{$message->message}}</p>
        <p>{{$message->created_at}}</p>
        <hr>
        <hr>
        @endif
        <br>
        
    
        @endforeach
      
    </div>
  </div>


<hr>
<div class="card w-75">
    <div class="card-body">
<h1>Complaints</h1>
@foreach($messages as $message)
@if($message->type == 'complaint')
<p>{{$message->sender_email}}</p>
<p>{{$message->phone}}</p>
<p>{{$message->message}}</p>
<p>{{$message->created_at}}</p>
@endif
<br>
@endforeach
</div>
</div>

<hr>
<div class="card w-75">
    <div class="card-body">
<h1>Suggestion</h1>
@foreach($messages as $message)
@if($message->type == 'suggestion')
<p>{{$message->sender_email}}</p>
<p>{{$message->phone}}</p>
<p>{{$message->message}}</p>
<p>{{$message->created_at}}</p>
@endif
<br>
@endforeach
</div>
</div>

@endsection

