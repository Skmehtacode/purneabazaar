<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $data['product'] = Product::all();
        return view('admin.manageProduct',$data);
    }

    
    public function create()
    {
        $data['category'] = Category::all();
        $data['brand'] = Brand::all();
        return view('admin.insertproduct',$data);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            
            'title'=>'required',
            'category_id'=>'required',
            'brand_id'=>'required',
            'image'=>'required',
            'description'=>'required',
            'discount_price'=>'required',
            'price'=>'required',
            'stock'=>'required',
        ]);

        $data = new Product();
        $data->title = $request->title;
        $data->category_id = $request->category_id;
        $data->brand_id = $request->brand_id;

        $filename = $request->image->getClientOriginalName();
            $request->image->move(public_path("images"),$filename);
        $data->image = $filename;

        $data->description = $request->description;
        $data->discount_price = $request->discount_price;
        $data->price = $request->price;
        $data->stock = $request->stock;
        $data->save();

        return redirect()->route('product.index');
    }

    
    public function show(Product $product)
    {
        //
    }

  
    public function edit(Product $product)
    {
        $data['category'] = Category::all();
        $data['brand'] = Brand::all();
        $data['product'] = $product;

        return view("admin.editProduct", $data);
    }

   
    public function update(Request $request, Product $product)
    {
        $request->validate([
            
            'title'=>'required',
            'category_id'=>'required',
            'brand_id'=>'required',
            'image'=>'required',
            'description'=>'required',
            'discount_price'=>'required',
            'price'=>'required',
            'stock'=>'required',
        ]);

        $data->title = $request->title;
        $data->category_id = $request->category_id;
        $data->brand_id = $request->brand_id;

        $filename = $request->image->getClientOriginalName();
            $request->image->move(public_path("images"),$filename);
        $data->image = $filename;

        $data->description = $request->description;
        $data->discount_price = $request->discount_price;
        $data->price = $request->price;
        $data->stock = $request->stock;
        $data->save();

        return redirect()->route('product.index')->with('success','woow! data inserted succcessfully');
    }

    
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
