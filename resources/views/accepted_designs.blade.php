@extends('master')
@section('content')
{{-- <div style="padding-top: 50px;"> --}}
@foreach($designs as $design)
    
    <div style="margin-left: 20%; margin-top: 5px;" class="card w-75" >
        <div class="card-body">
            <p>Design Num : #{{$design->id}}</p>
            <p>For Customer : {{$design->first_name}} {{$design->last_name}}</p>
            
          <a href="/edit_accepted_design/{{$design->id}}" class="btn btn-primary">View</a>
        </div>
        
      </div>
      <br>
        <br>
{{-- </div> --}}
@endforeach

@endsection