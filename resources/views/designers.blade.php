@extends('master')
@section('content')
<div style="padding-top: 20px;">

    
        <table  class="table">
            
              <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Experience years</th>
              </tr>
            @foreach($designers as $designer)
              @if($designer->is_blocked != 1)
              <tr>
                <td scope="row">{{$designer->id}}</td>

                <td><a href="/edit_designer/{{$designer->id}}">{{$designer->username}}</a></td>
                <td>{{$designer->email}}</td>
                <td>{{$designer->experience_years}}</td>
              </tr>
              @endif
            @endforeach
     
          </table>
    
</div>

@endsection
