@extends('master')
@section('content')

<div class="container customer-login" style="padding-top: 50px; margin-left: 25%;">
  <div class="row">
    <div class="col-sm-5 col-sm-offset-4">
      
      <form action="/add_design" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3">
            <input type="text" name="name" class="form-control" id="name" 
            placeholder="Design Name"><!--minlength="6"-->
        </div>
        <div class="mb-3">
            <input type="text" name="type" class="form-control" id="type" placeholder="Type">
        </div>
        <div class="mb-3">
            <input type="text" name="category" class="form-control" id="category" placeholder="Category">
        </div>
        <div class="mb-3">
            <input type="text" name="kind" class="form-control" id="kind" placeholder="Kind">
        </div>
        <div class="mb-3">
            <label for="brand">Choose a Model:</label>
            <select name="model_id" id="model_id">
              @foreach($models as $model)
              <option value="{{$model->id}}">
                {{$model->first_name}} {{$model->last_name}}
              </option>
              @endforeach
            </select>
        </div>
        <div class="mb-3">
          <input type="file" name="image" id="image" class="form-control-file" 
          accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>

    </div>
  </div>
</div>

@endsection

