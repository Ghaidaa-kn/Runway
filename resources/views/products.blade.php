@extends('master')
@section('content')

<section id="page-header">
    <h1 style="color: rgb(204, 80, 80)">RUNWAY </h1>
    <h3>Make your fashion like runway in your way</h3>
</section>

<span>Filter </span>
<select id="type" onchange="filter()">
    <option value="a">All</option>
    <option value="m">Men</option>
    <option value="w">Women</option>
    <option value="k">Kids</option>
    <option value="s">Sales</option>
    <option value="wi">Winter</option>
    <option value="su">Summer</option>
    <option value="au">Automn</option>
    <option value="sp">Spring</option>
</select>

<section id="product1" id="heroo" class="a">
    <div class="pro-container">
        @foreach($products as $product)
            <div class="pro">
                <img style="width: 225px; height:300px; " src="{{ asset('storage/img/'.$product->image) }}" alt="">
                <div class="description">
                    <span>{{$product->brand_name}}</span>
                    <h5>{{$product->type}}</h5>
                    <h6>{{$product->category}}</h6>
                    
                    <h4>{{$product->price}} SP</h4>
                </div>
                <a href="/product/{{$product->id}}"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        @endforeach
    </div>
</section> 

<section id="product1" id="heroo" class="w" hidden="hidden">
    <div class="pro-container">
        @foreach($products as $product)
        @if($product->kind == 'women')
            <div class="pro">
                <img style="width: 225px; height:300px; "  src="{{ asset('storage/img/'.$product->image) }}" alt="">
                <div class="description">
                    <span>{{$product->brand_name}}</span>
                    <h5>{{$product->type}}</h5>
                    <h6>{{$product->category}}</h6>
                    
                    <h4>{{$product->price}} SP</h4>
                </div>
                <a href="/product/{{$product->id}}"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        @endif
        @endforeach
    </div>
</section> 

<section id="product1"id="heroo" class="m" hidden="hidden">
    <div class="pro-container">
        @foreach($products as $product)
        @if($product->kind == 'men')
            <div class="pro">
                <img style="width: 225px; height:300px; "  src="{{ asset('storage/img/'.$product->image) }}" alt="">
                <div class="description">
                    <span>{{$product->brand_name}}</span>
                    <h5>{{$product->type}}</h5>
                    <h6>{{$product->category}}</h6>
                    
                    <h4>{{$product->price}} SP</h4>
                </div>
                <a href="/product/{{$product->id}}"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        @endif
        @endforeach
    </div>
</section> 

<section id="product1"id="heroo"class="k" hidden="hidden">
    <div class="pro-container">
        @foreach($products as $product)
        @if($product->kind == 'kids')
            <div class="pro">
                <img style="width: 225px; height:300px; "  src="{{ asset('storage/img/'.$product->image) }}" alt="">
                <div class="description">
                    <span>{{$product->brand_name}}</span>
                    <h5>{{$product->type}}</h5>
                    <h6>{{$product->category}}</h6>
                    
                    <h4>{{$product->price}} SP</h4>
                </div>
                <a href="/product/{{$product->id}}"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        @endif
        @endforeach
    </div>
</section> 

<section id="product1"id="heroo" class="s" hidden="hidden">
    <div class="pro-container">
        @foreach($products as $product)
        @if($product->discount != null)
            <div class="pro">
                <img style="width: 225px; height:300px; "  src="{{ asset('storage/img/'.$product->image) }}" alt="">
                <div class="description">
                    <span>{{$product->brand_name}}</span>
                    <h5>{{$product->type}}</h5>
                    <h6>{{$product->category}}</h6>
                    
                    <h4>{{$product->price}} SP</h4>
                </div>
                <a href="/product/{{$product->id}}"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        @endif
        @endforeach
    </div>
</section> 

<section id="product1"id="heroo" class="su" hidden="hidden">
    <div class="pro-container">
        @foreach($products as $product)
        @if($product->type == 'summer')
            <div class="pro">
                <img style="width: 225px; height:300px; "  src="{{ asset('storage/img/'.$product->image) }}" alt="">
                <div class="description">
                    <span>{{$product->brand_name}}</span>
                    <h5>{{$product->type}}</h5>
                    <h6>{{$product->category}}</h6>
                    
                    <h4>{{$product->price}} SP</h4>
                </div>
                <a href="/product/{{$product->id}}"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        @endif
        @endforeach
    </div>
</section> 


<section id="product1"id="heroo" class="wi" hidden="hidden">
    <div class="pro-container">
        @foreach($products as $product)
        @if($product->type == 'winter')
            <div class="pro">
                <img style="width: 225px; height:300px; "  src="{{ asset('storage/img/'.$product->image) }}" alt="">
                <div class="description">
                    <span>{{$product->brand_name}}</span>
                    <h5>{{$product->type}}</h5>
                    <h6>{{$product->category}}</h6>
                    
                    <h4>{{$product->price}} SP</h4>
                </div>
                <a href="/product/{{$product->id}}"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        @endif
        @endforeach
    </div>
</section> 


<section id="product1"id="heroo" class="sp" hidden="hidden">
    <div class="pro-container">
        @foreach($products as $product)
        @if($product->type == 'spring')
            <div class="pro">
                <img style="width: 225px; height:300px; "  src="{{ asset('storage/img/'.$product->image) }}" alt="">
                <div class="description">
                    <span>{{$product->brand_name}}</span>
                    <h5>{{$product->type}}</h5>
                    <h6>{{$product->category}}</h6>
                    
                    <h4>{{$product->price}} SP</h4>
                </div>
                <a href="/product/{{$product->id}}"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        @endif
        @endforeach
    </div>
</section> 


<section id="product1"id="heroo" class="au" hidden="hidden">
    <div class="pro-container">
        @foreach($products as $product)
        @if($product->type == 'automn')
            <div class="pro">
                <img src="{{ asset('storage/img/'.$product->image) }}" alt="">
                <div class="description">
                    <span>{{$product->brand_name}}</span>
                    <h5>{{$product->type}}</h5>
                    <h6>{{$product->category}}</h6>
                   
                    <h4>{{$product->price}} SP</h4>
                </div>
                <a href="/product/{{$product->id}}"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        @endif
        @endforeach
    </div>
</section> 


@endsection

    <script type="text/javascript">
        function filter(){
            var type = document.getElementById('type');
            if(type.value == 'w'){
                $('.w').removeAttr('hidden');
                $('.a').attr('hidden' , 'hidden');
                $('.m').attr('hidden' , 'hidden');
                $('.k').attr('hidden' , 'hidden');
                $('.s').attr('hidden' , 'hidden');
                $('.su').attr('hidden' , 'hidden');
                $('.wi').attr('hidden' , 'hidden');
                $('.sp').attr('hidden' , 'hidden');
                $('.au').attr('hidden' , 'hidden');
            }else if(type.value == 'm'){
                $('.m').removeAttr('hidden');
                $('.a').attr('hidden' , 'hidden');
                $('.w').attr('hidden' , 'hidden');
                $('.k').attr('hidden' , 'hidden');
                $('.s').attr('hidden' , 'hidden');
                $('.su').attr('hidden' , 'hidden');
                $('.wi').attr('hidden' , 'hidden');
                $('.sp').attr('hidden' , 'hidden');
                $('.au').attr('hidden' , 'hidden');
            }else if(type.value == 'k'){
                $('.k').removeAttr('hidden');
                $('.a').attr('hidden' , 'hidden');
                $('.w').attr('hidden' , 'hidden');
                $('.m').attr('hidden' , 'hidden');
                $('.s').attr('hidden' , 'hidden');
                $('.su').attr('hidden' , 'hidden');
                $('.wi').attr('hidden' , 'hidden');
                $('.sp').attr('hidden' , 'hidden');
                $('.au').attr('hidden' , 'hidden');
            }else if(type.value == 's'){
                $('.s').removeAttr('hidden');
                $('.a').attr('hidden' , 'hidden');
                $('.w').attr('hidden' , 'hidden');
                $('.m').attr('hidden' , 'hidden');
                $('.k').attr('hidden' , 'hidden');
                $('.su').attr('hidden' , 'hidden');
                $('.wi').attr('hidden' , 'hidden');
                $('.sp').attr('hidden' , 'hidden');
                $('.au').attr('hidden' , 'hidden');
            }else if(type.value == 'su'){
                $('.su').removeAttr('hidden');
                $('.s').attr('hidden' , 'hidden');
                $('.w').attr('hidden' , 'hidden');
                $('.m').attr('hidden' , 'hidden');
                $('.k').attr('hidden' , 'hidden');
                $('.a').attr('hidden' , 'hidden');
                $('.wi').attr('hidden' , 'hidden');
                $('.sp').attr('hidden' , 'hidden');
                $('.au').attr('hidden' , 'hidden');
            }else if(type.value == 'wi'){
                $('.wi').removeAttr('hidden');
                $('.s').attr('hidden' , 'hidden');
                $('.w').attr('hidden' , 'hidden');
                $('.m').attr('hidden' , 'hidden');
                $('.k').attr('hidden' , 'hidden');
                $('.a').attr('hidden' , 'hidden');
                $('.su').attr('hidden' , 'hidden');
                $('.sp').attr('hidden' , 'hidden');
                $('.au').attr('hidden' , 'hidden');
            }else if(type.value == 'sp'){
                $('.sp').removeAttr('hidden');
                $('.s').attr('hidden' , 'hidden');
                $('.w').attr('hidden' , 'hidden');
                $('.m').attr('hidden' , 'hidden');
                $('.k').attr('hidden' , 'hidden');
                $('.a').attr('hidden' , 'hidden');
                $('.wi').attr('hidden' , 'hidden');
                $('.su').attr('hidden' , 'hidden');
                $('.au').attr('hidden' , 'hidden');
            }else if(type.value == 'au'){
                $('.au').removeAttr('hidden');
                $('.s').attr('hidden' , 'hidden');
                $('.w').attr('hidden' , 'hidden');
                $('.m').attr('hidden' , 'hidden');
                $('.k').attr('hidden' , 'hidden');
                $('.a').attr('hidden' , 'hidden');
                $('.wi').attr('hidden' , 'hidden');
                $('.sp').attr('hidden' , 'hidden');
                $('.su').attr('hidden' , 'hidden');
            }
        }
    </script>