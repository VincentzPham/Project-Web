<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Validation\Rule;


class ProductController extends Controller
{
    public function index()
    {
        $data = Product::get();
        return view('product-list', compact('data'));
    }

    public function index2()
    {
        $data = Product::select('products.*','categories.categoryName')
            ->join('categories','products.categoryID', '=', 'categories.categoryID')
            ->get();

        return view('product-list',compact('data'));
    }

    public function index3()
    {
        $data = Product::select('products.*','categories.categoryName')
        ->join('categories','products.categoryID', '=', 'categories.categoryID')
        ->get();

        return view('customers/index', compact('data'));
    }

    public function add()
    {
        return view('product-add');

    }

    public function add2()
    {
        $data = Category::get();
        return view('admins/product-add',compact('data'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'productID' => 'required | unique:products',
            'productName' => 'required | unique:products',
            'productPrice' => 'required',
            'productDetail' => 'required',
            'productImage' => 'required | unique:products',
            'categoryID' => 'required'
        ]);

        $product = new Product();
        $product->productID = $request->productID;
        $product->productName = $request->productName;
        $product->productPrice = $request->productPrice;
        $product->productDetail = $request->productDetail;
        $product->productImage = $request->productImage;
        $product->categoryID = $request->categoryID;

        $product->save();
        return redirect()->back()->with('success', "Product added successfully!");
        //return redirect()->back()->with('Failed', "Product has not been added!");
    }

    public function edit($id)
    {
        $data = Product::where('productID', '=', $id)
        ->join('categories','products.categoryID', '=', 'categories.categoryID')
        ->first();
        $cate = Category::get();
        return view('admins/product-edit', compact('data', 'cate'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'productName' => ['required', Rule::unique('products')->ignore($request->productID, 'productID')],
            'productImage' =>['required', Rule::unique('products')->ignore($request->productID, 'productID')],
            //'categoryID' => 'required'
        ]);

        $id = $request->productID;
        Product::where('productID', '=', $id)->update([
            'productName' => $request->productName,
            'productPrice' => $request->productPrice,
            'productDetail' => $request->productDetail,
            'productImage' => $request->productImage,
            'categoryID' => $request->categoryID,
        ]);
        return redirect()->back()->with('success', 'Product update succesfully!');
    }

    public function delete($id)
    {
        Product::where('productID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product deleted');
    }
}
