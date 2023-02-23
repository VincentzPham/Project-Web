<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Category;
Use Hash;
Use Session;

class CustomerController extends Controller
{
    public function register()
    {
        return view('customers/register');
    }

    public function adduser(Request $request)
    {
        $customer = new Customer();
        $customer->customerEmail = $request->email;
        $customer->customerPass = $request->password;
        $customer->customerName = $request->fullname;
        $customer->customerAddress = $request->address;
        $customer->customerPhone = $request->phone;
        $res = $customer->save();
        if($res)
        {
            return back()->with('success', 'You have registered successfully!');
        }
        else
        {
            return back()->with('fail', 'Something wrong');
        }
    }

    public function login()
    {
        return view ('customers/login');
    }

    public function userlogin(Request $request)
    {
        $user = Customer::where('customerEmail', '=', $request->userEmail)->first();
        if($user)
        {
            $password = Customer::where('customerPass', '=', $request->userPass)->first();
            if($password)
            {
                $request->session()->put('userLogin', $user->customerEmail);
                $request->session()->put('userName', $user->customerName);
                $data = Product::select('products.*','categories.categoryName')
                ->join('categories','products.categoryID', '=', 'categories.categoryID')
                ->get();

                return view('customers/indexlog', compact('data'))->with('success', 'Hello userName!');
            }
            else
            {
                return back()->with('fail', 'Invalid password!');
            }
        }
        else
        {
            return back()->with('fail', 'Invalid ID!');
        }
    }

    public function logout()
    {
        if(Session::has('userLogin'));
        Session::pull('userLogin');
        $data = Product::select('products.*','categories.categoryName')
            ->join('categories','products.categoryID', '=', 'categories.categoryID')
            ->get();
        return view('customers/index', compact('data'));
    }

    public function AddToCart($id)
    {
        $product = Product::where('productID', '=' ,$id)->first();

        $cart = session()->get('cart');

        $cart[$id] = [
            "name" => $product->productName,
            "quantity" => 1,
            "price" =>$product->productPrice,
            "photo" => $product->productImage
        ];

        session()->put('cart', $cart);
        $data = Product::select('products.*','categories.categoryName')
                ->join('categories','products.categoryID', '=', 'categories.categoryID')
                ->get();
        return view('customers/indexlog', compact('data'))->with('success', "Product added successfully!");


    }

    public function cart()
    {
        return view('cart');
    }

    public function aboutus()
    {
        return view ('customers/about-us');
    }

    public function contact()
    {
        return view ('customers/contact');
    }

    public function shop()
    {
        $data = Product::select('products.*','categories.categoryName')
        ->join('categories','products.categoryID', '=', 'categories.categoryID')
        ->get();
        return view ('customers/shop-grid-log', compact('data'));
    }

    public function shoppingcart()
    {
        return view ('customers/shopping-cart');
    }

    public function editCustomer($email)
    {
        $data = Customer::where('customerEmail', '=', $email)->first();
        return view('customers/customers-edit', compact('data'));
    }

    public function updateCustomer(Request $request)
    {
        $email = $request->customerEmail;
        Customer::where('customerEmail', '=', $email)->update([
            'customerName' => $request->customerName,
            'customerAddress' => $request->customerAddress,
            'customerPhone' => $request->customerPhone,
        ]);
        return redirect()->back()->with('success', 'Customer information update succesfully!');
    }

    public function indexlog()
    {
        if(Session::has('userLogin'))
       {
        $data = Product::select('products.*','categories.categoryName')
        ->join('categories','products.categoryID', '=', 'categories.categoryID')
        ->get();
       }
       else
       {
            return view('customers/login');
       }

        return view('customers/indexlog', compact('data'))->with('success', 'Hello userName!');
    }

    public function editCustomerA($email)
    {
        $data = Customer::where('customerEmail', '=', $email)->first();
        return view('customers/customers-edit-A', compact('data'));
    }

    public function shoplog()
    {
        $data = Product::select('products.*','categories.categoryName')
        ->join('categories','products.categoryID', '=', 'categories.categoryID')
        ->get();
        return view ('customers/shop-grid-log', compact('data'));
    }

    public function contactlog()
    {
        return view ('customers/contact-log');
    }

    public function aboutuslog()
    {
        return view ('customers/about-us-log');
    }

    public function productdetail($name)
    {
        $data = Product::where('productName', '=', $name)->first();
        $pdata = Product::select('products.*','categories.categoryName')
        ->join('categories','products.categoryID', '=', 'categories.categoryID')
        ->get();
        return view('customers/shop-detail', compact('data' , 'pdata'));
    }
}
