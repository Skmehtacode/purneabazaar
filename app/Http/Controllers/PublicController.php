<?php

namespace App\Http\Controllers;
use App\Models\{Product,Category,Order,OrderItem};
use Illuminate\Http\Request;
use Auth;

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

    // add to cart
    public function addToCart(Request $req,$p_id){
        $product = Product::findOrFail($p_id);
        $user = Auth::user();
        if($product){
            $order = Order::where([['ordered',false],["user_id",$user->id]])->first();
            if($order){
                    $orderItem = OrderItem::where([["ordered",false],["order_id",$order->id],["product_id",$product->id]])->first();
                    if($orderItem){
                        //only increase qty
                        $orderItem->qty+=1;
                        $orderItem->save();
                    }
                    else{
                        //create new orderitem in order(cart)
                        $oi = new OrderItem();
                        $oi->ordered = false;
                        $oi->product_id = $product->id;
                        $oi->order_id = $order->id;
                        $oi->save();
                    }
            }
            else{
                // create new order
                $o = new Order();
                $o->ordered =  false;
                $o->user_id = $user->id;
                $o->save();

                // create new orderitem
                $oi  = new OrderItem();
                $oi->ordered = false;
                $oi->product_id = $product->id;
                $oi->order_id = $o->id;
                $oi->save();
            }
        }
        return redirect()->route("cart");
    }
}
