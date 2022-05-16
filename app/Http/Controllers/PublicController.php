<?php

namespace App\Http\Controllers;
use App\Models\{Product,Category};
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(Request $req,$cat_id=NULL){
        $data['products'] = Product::all();

        if($req->has("find")){
            $search = $req->search;
            $data['products'] = Product::where("title","LIKE","%$search%")->get();
        }
        elseif($cat_id != NULL){
            $data['products'] = Product::where("category_id",$cat_id)->get();
        }
        $data['categories'] = Category::all();
        return view("public.home",$data);
    }

   

    public function view($p_id){
        $data['categories'] = Category::all();
        $data['product'] = Product::find($p_id);
        return view("public.viewProduct",$data);
    }

    public function cart(){

        return view("public.cart");
    }
    public function checkout(){

        return view("public.checkout");
    }
}
