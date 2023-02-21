@extends('master')
@section('content')
<div class="card w-75">
    <div class="card-body">

@foreach($cards as $card)
    <div class="pro">
        <h4>{{$card->first_name}} {{$card->last_name}}</h4>
        <h4>{{$card->email}}</h4>
        <h4>{{$card->code}}</h4>
        <h4>{{$card->is_valid}}</h4>
        <form action="/block_unblock/{{$card->id}}/{{$card->is_valid}}/card" 
              method="POST">
            {{ csrf_field() }}
            <button type="submit" style="background-color: red">
                @if($card->is_valid == 1)
                    Block
                @elseif($card->is_valid == 0)
                    UnBlock
                @endif
            </button>
        </form>
    </div>
    <hr>
@endforeach
    </div></div>
@endsection

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
           integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
           crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        function block(id) {
            $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                  }
                });

            var t = document.getElementsByClassName('validity');
            var tt = document.getElementsByClassName('content');
            
            for (var i = 0; i < t.length; i++){
                if(id == i+1){
                    if(t[i].value == 1){
                        console.log(t[i].value);
                        tt[i].innerHTML = 'UnBlock';
                        t[i].value = 0;
                        var x = t[i].value;
                        console.log(t[i].value);
                        $.ajax({
                            headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                              },
                            type: "POST",
                            url: "{{ url('/block') }}",
                            contentType: "application/json; charset=utf-8",
                            data: {x: x , 
                                   id: id},
                            dataType: "json",
                            contentType: false,
                            processData: false,
                            success: function (result) {
                                console.log(result);
                                console.log('done');
                            },
                            error: function (data, textStatus, errorThrown) {
                                console.log(data);
                            },
                        });
                    }else if(t[i].value == 0){
                        console.log(t[i].value);
                        tt[i].innerHTML = 'Block';
                        t[i].value = 1;
                        console.log(t[i].value);
                    }
                }
            }
        }
    </script>