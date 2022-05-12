<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    
    public function index()
    {
        $data['category'] = Category::all();
        return view('admin.manageCategory',$data);
    }

    
    public function create()
    {
        $data['category'] = Category::where("parent_id","0")->get();
        return view("admin.insertCategory",$data);
    }

   
    public function store(Request $request)
    {
        $request->validate([

            'cat_title' =>"required",
            'parent_id' =>"required",
        ]);

        $category = new Category();
        $category->cat_title = $request->cat_title;
        $category->parent_id = $request->parent_id;
        $category->save();
        return redirect()->route("category.index");
    }

   
    public function show(Product $category)
    {
        //
    }

    public function edit(Category $category)
    {
        //
    }

   
    public function update(Request $request, Category $category)
    {
        //
    }

    
    public function destroy(Category $category)
    {
        $category = Category::find($category->id);
        $category->delete();
        return redirect()->route("category.index");
    }
}

