<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\http\Controllers\CustomerController;
use App\http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('product-list', [ProductController::class, 'index2']);
Route::get('customers/index', [ProductController::class, 'index3']);
Route::get('customers/register', [CustomerController::class, 'register']);
Route::post('customers/adduser', [CustomerController::class, 'adduser']);
Route::get('customers/login', [CustomerController::class, 'login']);
Route::post('customers/login', [CustomerController::class, 'userlogin']);
Route::get('customers/logout', [CustomerController::class, 'logout']);
Route::get('customers/indexlog', [CustomerController::class, 'indexlog']);
Route::get('customers/checkout', [CustomerController::class, 'checkout']);
Route::get('customers/shop-grid-log', [CustomerController::class, 'shoplog']);
Route::get('customers/about-us-log', [CustomerController::class, 'aboutuslog']);
Route::get('customers/contact-log', [CustomerController::class, 'contactlog']);

Route::get('customers/AddToCart{id}', [CustomerController::class, 'AddToCart']);
Route::get('cart', [CustomerController::class, 'cart']);

Route::get('admins/index', [AdminController::class, 'index']);
Route::get('admins/products', [AdminController::class, 'getProducts']);
Route::get('admins/categories', [AdminController::class, 'getCategories']);
Route::post('admins/login', [AdminController::class, 'login']);
Route::get('admins/logout', [AdminController::class, 'logout']);

Route::get('admins/admin-profile', [AdminController::class, 'getAdmin']);
Route::post('admin-update', [AdminController::class, 'updateAdmin']);
Route::get('admins/admin-edit/{id}', [AdminController::class, 'editAdmin']);
Route::get('admin-delete/{id}', [AdminController::class, 'deleteAdmin']);
Route::get('admins/admin-add', [AdminController::class, 'addAdmin']);
Route::post('admin-save', [AdminController::class, 'saveAdmin']);

Route::get('admins/customers', [AdminController::class, 'getCustomers']);
Route::get('customer-delete/{email}', [AdminController::class, 'deleteCustomer']);
//Route::get('admins/customers-edit/{email}', [AdminController::class, 'editCustomer']);
//Route::post('customer-update', [AdminController::class, 'updateCustomer']);
Route::get('admins/customer-add', [AdminController::class, 'addCustomer']);
Route::post('customer-save', [AdminController::class, 'saveCustomer']);

Route::get('admins/product-add', [ProductController::class, 'add2']);
Route::post('product-save', [ProductController::class, 'save']);
Route::get('admins/product-edit/{id}', [ProductController::class, 'edit']);
Route::post('product-update', [ProductController::class, 'update']);
Route::get('product-delete/{id}', [ProductController::class, 'delete']);

Route::get('category-delete/{id}', [CategoryController::class, 'delete']);
Route::get('category-edit/{id}', [CategoryController::class, 'edit']);
Route::get('admins/category-add', [CategoryController::class, 'add']);
Route::post('category-update', [CategoryController::class, 'update']);
Route::post('category-save', [CategoryController::class, 'save']);

Route::get('customers/about-us', [CustomerController::class, 'aboutus']);
Route::get('customers/contact', [CustomerController::class, 'contact']);
Route::get('customers/shop-grid', [CustomerController::class, 'shop']);
Route::get('customers/shopping-cart', [CustomerController::class, 'shoppingcart']);
Route::get('customers/customers-edit/{email}', [CustomerController::class, 'editCustomer']);
Route::get('customers/customers-edit-A/{email}', [CustomerController::class, 'editCustomerA']);
Route::post('customer-update', [CustomerController::class, 'updateCustomer']);
Route::get('customers/shop-detail/{name}', [CustomerController::class, 'productdetail']);


