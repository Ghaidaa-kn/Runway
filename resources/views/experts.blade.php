@extends('master')
@section('content')

@foreach($experts as $expert)
    @if($expert->is_blocked != 1)
    <a href="/edit_expert/{{$expert->id}}">
        {{-- <h3>Username : {{$expert->username}}</h3>
        <h3>Email : {{$expert->email}}</h3>
        <h4>Experience years : {{$expert->experience_years}}</h4> --}}
        <table  class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Experience years</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{$expert->id}}</th>
                <td>{{$expert->username}}</td>
                <td>{{$expert->email}}</td>
                <td>{{$expert->experience_years}}</td>
              </tr>
             
            </tbody>
          </table>
    </a>
    @endif
    
@endforeach

@endsection