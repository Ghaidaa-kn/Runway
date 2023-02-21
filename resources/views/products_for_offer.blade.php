@extends('master')
@section('content')

<p>Select products for this offer</p>
<form action="/selected_products" method="POST">
	{{ csrf_field() }}
	@foreach($available_products as $product)
		<input type="checkbox" name="product_offer[]" value="{{$product->id}}">{{$product->name}}<br> 
	@endforeach
	<button>Select</button>
</form>

@endsection
	