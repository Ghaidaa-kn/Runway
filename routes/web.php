<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\AdminCont;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ProductCont@get_products');

Route::get('/contact', function () {
    return view('contact'); 
});


Route::get('/register_as', function () {
    return view('register_as');
});
Route::get('/login_as', function () {
    return view('login_as');
});
Route::get('/logout', function () {
    Session::forget('user');
    Session::forget('role');
    return redirect('/');
});


Route::get('/admin_register', function () {
    return view('admin_register');
});
Route::post('/admin_register' , 'AdminCont@register');

Route::get('/admin_login', function () {
    return view('admin_login');
});
Route::post('/admin_login' , 'AdminCont@login');
Route::get('/dashboard' , 'AdminCont@dashboard');
Route::get('/all_customers' , 'CustomerCont@all_customers');
Route::get('/all_experts' , 'ExpertCont@all_experts');
Route::get('/all_designers' , 'DesignerCont@all_designers');
Route::get('/all_product_managers' , 'ProductManagerCont@all_managers');
Route::get('/all_models' , 'ModelCont@all_models');
Route::get('/all_bank_cards' , 'CustomerCont@all_bank_cards');
Route::post('/add_model' , 'ModelCont@add_model');
Route::get('/delete_model/{id}' , 'ModelCont@delete_model');
Route::post('/block_unblock/{id}/{value}/{type}' , 'AdminCont@block_unblock');




Route::get('/expert_register', function () {
    return view('expert_register');
});
Route::post('/expert_register' , 'ExpertCont@register');

Route::get('/expert_login', function () {
    return view('expert_login');
});
Route::post('/expert_login' , 'ExpertCont@login');
Route::get('/get_experts' , 'ExpertCont@get_experts');
Route::get('/edit_expert/{id}' , 'ExpertCont@edit');



//customer consultation
Route::post('/request_consultation','CustomerConsultationCont@request_consultation');
Route::get('/get_customer_consultations' ,'CustomerConsultationCont@get_customer_consultations');
Route::get('/get_customer_requests','CustomerConsultationCont@get_customer_consultation_requests');
Route::get('/edit_customer_req/{id}' , 'CustomerConsultationCont@edit');
Route::post('/add_customer_advice/{id}' , 'CustomerConsultationCont@add_customer_advice');
//designer consultation
Route::post('/request_design_consultation','DesignerConsultationCont@request_consultation');
Route::get('/get_designer_consultations' ,'DesignerConsultationCont@get_designer_consultations');
Route::get('/get_design_consultation_requests','DesignerConsultationCont@get_design_consultation_requests');
Route::get('/edit_design_consultation_req/{id}' , 'DesignerConsultationCont@edit');
Route::post('/add_designer_advice/{id}' , 'DesignerConsultationCont@add_designer_advice');




Route::get('/designer_register', function () {
    return view('designer_register');
});
Route::post('/designer_register' , 'DesignerCont@register');

Route::get('/designer_login', function () {
    return view('designer_login');
});
Route::post('/designer_login' , 'DesignerCont@login');
Route::get('/designers' , 'DesignerCont@get_all');
Route::get('/edit_designer/{id}' , 'DesignerCont@edit');



Route::get('/designes' , 'DesignCont@get_designer_designes');
Route::get('/add_design_view' , 'DesignCont@add_design_view');
Route::post('/add_design' , 'DesignCont@add_design');


Route::post('/add_design_request' , 'RequestDesignCont@add_design_request');
Route::get('/all_requests' , 'RequestDesignCont@all_requests');
Route::get('/edit_request_design/{id}' , 'RequestDesignCont@edit');
Route::post('/request_response/{id}' , 'RequestDesignCont@request_response');
Route::post('/upload_design_photo/{id}' , 'RequestDesignCont@upload_design_photo');
Route::get('/accepted_designs' , 'RequestDesignCont@get_accepted_designs');
Route::get('/edit_accepted_design/{id}' , 'RequestDesignCont@edit_accepted_design');
Route::get('/get_customer_design_requests' , 'RequestDesignCont@get_customer_design_requests');
Route::get('/edit_customer_design_request/{id}' , 'RequestDesignCont@edit_customer_design_request');



Route::get('/customer_register', function () {
    return view('customer_register');
});
Route::post('/customer_register' , 'CustomerCont@register');

Route::get('/customer_login', function () {
    return view('customer_login');
});
Route::post('/customer_login' , 'CustomerCont@login');




Route::get('/product_manager_register', function () {
    return view('product_manager_register');
});
Route::post('/product_manager_register' , 'ProductManagerCont@register');

Route::get('/product_manager_login', function () {
    return view('product_manager_login');
});
Route::post('/product_manager_login' , 'ProductManagerCont@login');
Route::get('/all_products' , 'ProductCont@all_products');



Route::get('/add_product_view', 'ProductCont@add_product_view');
Route::get('/products' , 'ProductCont@get_products');
Route::get('/product/{id}', 'ProductCont@edit_product');
Route::post('/add_product' , 'ProductCont@add_product');
Route::get('/get_sales_products' , 'ProductCont@get_sales_products');

Route::post('/add_comment' , 'CommentCont@add_comment');



Route::get('/add_brand_view', function () {
    return view('add_brand');
});
Route::get('/all_brands' , 'BrandCont@get_brands');
Route::post('/add_brand' , 'BrandCont@add_brand');



Route::get('/add_material_view', function () {
    return view('add_material');
});
Route::post('/add_material' , 'MaterialCont@add_material');
Route::get('/all_materials' , 'MaterialCont@all_materials');



Route::get('/add_message', function () {
    return view('send_message');
});
Route::post('/add_message' , 'MessageCont@add_message');


Route::get('/add_offer' , 'OfferCont@add_offer');
Route::post('/make_offer' , 'offerCont@make_offer');


Route::get('/articles', 'ArticleCont@get_articles');
Route::get('/add_article_view', 'ArticleCont@add_article_view');
Route::post('/add_article' , 'ArticleCont@add_article');


Route::get('/carts', 'CartCont@get_user_carts');
Route::post('/add_to_cart' , 'CartCont@add_to_cart');
Route::get('/delete_cart/{id}' , 'CartCont@delete_cart');

Route::get('/order_now' , 'OrderCont@order_now');
Route::post('/make_order' , 'OrderCont@make_order');
Route::get('/get_orders' , 'OrderCont@get_customer_orders');

