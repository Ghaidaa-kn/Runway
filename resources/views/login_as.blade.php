@extends('master')
@section('content')

    
    <div style="width: 100%;padding: 200px; padding-left: 40%;">
 
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="button"><a href="/customer_login" style="color: white;">Login As Customer </a></button>
            <button class="btn btn-primary" type="button"><a href="/designer_login " style="color: white;">Login As Designer </a></button>
            <button class="btn btn-primary" type="button"><a href="/expert_login" style="color: white;">Login As Expert </a></button>
            <button class="btn btn-primary" type="button"><a href="/product_manager_login"style="color: white;">Login As Product Manager</a></button>
            <button class="btn btn-primary" type="button"><a href="/admin_login" style="color: white;">Login As Admin  </a></button>
          </div>
      </div>
    
  

@endsection

