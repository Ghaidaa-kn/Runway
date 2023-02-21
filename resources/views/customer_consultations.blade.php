@extends('master')
@section('content')

@foreach($all as $one)
    <div style="padding-top: 50px;">
    <table  class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">From Expert </th>
            <th scope="col">Consultation </th>
            <th scope="col">Expert Advice</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{$one->id}}</th>
            <td>{{$one->expert_name}}</td>
            <td>{{$one->consultation}}</td>
            <td> @if($one->expert_advice == null)
                No Advice Until Now
            @elseif($one->expert_advice != null)
                {{$one->expert_advice}}
            @endif</td>
          </tr>
         
        </tbody>
      </table>
    </div>
    
@endforeach

@endsection