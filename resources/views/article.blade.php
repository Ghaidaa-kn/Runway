@extends('master')
@section('content')
<div style="padding-left: 25%; width: 100%; height: 50px;">
<label><h2 style="color: rgb(187, 89, 89); text-align: center;">Public Articles</h2></label>
<section id="art">
    @foreach($pb_articles as $article)
    
    <div class="card" style="width: 100%;">
      <img style="width: 300px; height: 300px;"  src="{{asset('storage/img/'.$article->image)}}">
      <div class="card-body">
        <h4>{{$article->title}}</h4>
                  @if($article->type == 'product')
                  <p>About Product {{$article->product_name}}</p>
                  @endif
                  @if($article->type == 'brand')
                  <p>About Brand ...</p>
                  @endif
                 <p>{{$article->content}}</p>
                 <h5>Written by the expert : {{$article->username}}</h5>
      </div>
    </div>
      <br>
      <br>
      {{-- <div class="card" style="width: 18rem;">
        <img src="{{asset('storage/img/'.$article->image)}}">
        <div class="card-body">
          <h4>{{$article->title}}</h4>
                    @if($article->type == 'product')
                    <p>About Product {{$article->product_name}}</p>
                    @endif
                    @if($article->type == 'brand')
                    <p>About Brand ...</p>
                    @endif
                   <p>{{$article->content}}</p>
                   <h5>Written by the expert : {{$article->username}}</h5>
        </div>
      </div> --}}
    @endforeach
</section>



<label><h2 style="color: rgb(187, 89, 89);">Product Articles</h2></label>
<section id="art">
    @foreach($p_articles as $article)
    
    <div class="card" style="width: 100%;">
      <img style="width: 300px; height: 300px;"  src="{{asset('storage/img/'.$article->image)}}">
      <div class="card-body">
        <h4>{{$article->title}}</h4>
                  @if($article->type == 'product')
                  <p>About Product {{$article->product_name}}</p>
                  @endif
                  @if($article->type == 'brand')
                  <p>About Brand ...</p>
                  @endif
                 <p>{{$article->content}}</p>
                 <h5>Written by the expert : {{$article->username}}</h5>
      </div>
    </div>
      <br>
      <br>
    @endforeach
</section>

<label><h2 style="color: rgb(167, 81, 81);">Brand Articles</h2></label>
<section id="art">
    @foreach($b_articles as $article)
    <div class="card" style="width: 100%;">
      <img style="width: 300px; height: 300px;" src="{{asset('storage/img/'.$article->image)}}">
      <div class="card-body">
        <h4>{{$article->title}}</h4>
                  @if($article->type == 'product')
                  <p>About Product {{$article->product_name}}</p>
                  @endif
                  @if($article->type == 'brand')
                  <p>About Brand ...</p>
                  @endif
                 <p>{{$article->content}}</p>
                 <h5>Written by the expert : {{$article->username}}</h5>
      </div>
    </div>
      <br>
      <br>
      {{-- <div class="card" style="width: 100%;">
        <img src="{{asset('storage/img/'.$article->image)}}">
        <div class="card-body">
          <h4>{{$article->title}}</h4>
                    @if($article->type == 'product')
                    <p>About Product {{$article->product_name}}</p>
                    @endif
                    @if($article->type == 'brand')
                    <p>About Brand ...</p>
                    @endif
                   <p>{{$article->content}}</p>
                   <h5>Written by the expert : {{$article->username}}</h5>
        </div>
      </div> --}}
     
    @endforeach
</section>
</div>

@endsection