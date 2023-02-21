<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="with=device-width initial-scale=0.1">
        <title>products</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
          rel="stylesheet"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="{{ asset('css/style0.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          rel="stylesheet"/>
        <link/>
        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
          rel="stylesheet"/>


    </head>
    <body ><!--backgroung imsge for all pages-->
    <section id="header">
        <a href="#"><img src="{{asset('storage/img/icon.png')}}" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                @if(session('role') == null)
                <li><a href="/products">Products</a></li>
                <li><a href="/articles">Articles</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/get_sales_products">Sales</a></li>
                <li><a href="/designers">designers</a></li>
                <li><a href="/get_experts">experts</a></li>
                <li><a href="/register_as">Register</a></li>
                <li><a href="/login_as">Login</a></li>
                @endif
                @if(session('role') == 'designer')
                <li><a href="/designes">Designs</a></li>
                <li><a href="/add_design_view">Add Design</a></li>
                <li><a href="/all_requests">Design Requests</a></li>
                <li><a href="/accepted_designs">Accepted Designs</a></li>
                <li><a href="/get_experts">Experts</a></li>
                <li><a href="/articles">Articles</a></li>
                <li><a href="/get_designer_consultations">Consultations</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/logout">Logout</a></li>
                <li><a href="#">{{session('user')['username']}}</a></li>
                @endif
                @if(session('role')== 'customer')
                <li><a href="/products">Products</a></li>
                <li><a href="/carts">Carts</a></li>
                <li><a href="/get_orders">Orders</a></li>
                <li><a href="/get_sales_products">Sales</a></li>
                <li><a href="/designers">designers</a></li>
                <li><a href="/get_experts">experts</a></li>
                <li><a href="/get_customer_consultations">Consultations</a></li>
                <li><a href="/get_customer_design_requests">Design Requests</a></li>
                <li><a href="/articles">Articles</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/logout">Logout</a></li>
                <li><a href="#">{{session('user')['username']}}</a></li>
                @endif
                @if(session('role') == 'manager')
                <li><a href="/all_products">Products</a></li>
                <li><a href="/add_product_view">Add Product</a></li>
                <li><a href="/all_brands">Brands</a></li>
                <li><a href="/add_brand_view">Add Brand</a></li>
                <li><a href="/all_materials">Materials</a></li>
                <li><a href="/add_material_view">Add Material</a></li>
                <li><a href="/add_offer">Add Offers</a></li>
                <li><a href="/articles">Articles</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/logout">Logout</a></li>
                <li><a href="#">{{session('user')['username']}}</a></li>
                @endif
                @if(session('role')== 'expert')
                <li><a href="/get_customer_requests">Customer Requests</a></li>
                <li><a href="/get_design_consultation_requests">Designer Requests</a></li>
                <li><a href="/articles">Articles</a></li>
                <li><a href="/add_article_view">Add Article</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/logout">Logout</a></li>
                <li><a href="#">{{session('user')['username']}}</a></li>
                @endif
                @if(session('role') == 'admin')
                <li><a href="/all_customers">Customers</a></li>
                <li><a href="/all_experts">Fashion Experts</a></li>
                <li><a href="/all_designers">Designers</a></li>
                <li><a href="/all_models">Models</a></li>
                <li><a href="/all_bank_cards">Bank Cards</a></li>
                <li><a href="/product_manager_register">Add Product Manager</a></li>
                <li><a href="/logout">Logout</a></li>
                <li><a href="#">{{session('user')['username']}}</a></li>
                @endif
            </ul>
        </div>
    </section>

    @if($errors->any())
      @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
      @endforeach
    @endif

    <div class="container">
        @yield('content')
    </div>

    {{-- <footer class="sec-1">
        <div class="col">
            <img  class= "logo"src="img/icon.png">
            <h4>contact</h4>
            <p><strong>Address : </strong> syria/damascus-----------</p>
            <p><strong>Phone : </strong>+963--------------------</p>
            <p><strong>Social media :</strong>runway sy</p>
            <div class="follow">
                <div class="icons">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
    </footer> --}}
    <script src="script.js"></script>
    </body>
</html>