@extends('master')
@section('content')

<p>#{{$request->id}}</p>
<p>kind : {{$request->kind}}</p>
<p>category : {{$request->category}}</p>
<p>date : {{$request->date}}</p>
<p>payment_way : {{$request->payment_way}}</p>
<p>size : {{$request->size}}</p>
<p>color : {{$request->color}}</p>
@if($request->other_features != null)
    <p>other_features : {{$request->other_features}}</p>
@endif
<h4>Needed Materials</h4>
@foreach($materials as $material)
    <p>{{$material->name}}</p>
    <p>{{$material->description}}</p>
@endforeach


@if($role == 'designer')
    <form action="/request_response/{{$request->id}}" method="POST">
        {{ csrf_field() }}
        <select name="status" id="status" onchange="response()" required>
            <option value="">Request Status</option>
            <option value="1">Approve</option>
            <option value="2">Reject</option>
        </select>
        <div class="sub" hidden="hidden">
            <input type="number" name="price" placeholder="price">
            <input type="hidden" name="stage" value="0">
            <input type="hidden" name="payment_status" value="pending">
        </div>
        {{-- <button style="color: red;">Submit</button> --}}
        <br>
        <button style="margin-left: 40%;"  type="submit" class="btn btn-success">Send</button>
    </form>
@endif

@endsection

    <script type="text/javascript">
        function response(){
            var res = document.getElementById('status');
            if(res.value == '1'){
                $('.sub').removeAttr('hidden');
            }else if(res.value == '2' || res.value == ""){
                $('.sub').attr('hidden' , 'hidden');
            }
        }
    </script>
