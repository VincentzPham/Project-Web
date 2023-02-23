<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::get();
        return view('category-list', compact('data'));
    }

    public function add()
    {
        $data = Category::get();
        return view('admins/category-add',compact('data'));
    }

    public function save(Request $request)
    {
        $category = new Category();
        $category->categoryID = $request->categoryID;
        $category->categoryName = $request->categoryName;

        $category->save();
        return redirect()->back()->with('success', "Category added successfully!");
        //return redirect()->back()->with('Failed', "Product has not been added!");
    }

    public function edit($id)
    {
        $data = Category::where('categoryID', '=', $id)->first();
        return view('category-edit', compact('data'));
    }

    public function update(Request $request)
    {
        $id = $request->categoryID;
        Category::where('categoryID', '=', $id)->update([
            'categoryName' => $request->categoryName,
        ]);
        return redirect()->back()->with('success', 'Category update succesfully!');
    }

    public function delete($id)
    {
        Category::where('categoryID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Category deleted');
    }
}
