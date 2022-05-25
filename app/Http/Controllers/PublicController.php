<?php

namespace App\Http\Controllers;
use App\Models\{Product,Category,Order,OrderItem,Coupon,Address};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Anand\LaravelPaytmWallet\Facades\PaytmWallet;

class PublicController extends Controller
{
    public function index(Request $req,$cat_id=NULL){
        $data['products'] = Product::all();
        if($cat_id !=null){

            $data['categories'] = Category::all();
            $data['products']= Product::where('category_id',$cat_id)->get();
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

        $data['order'] = get_order();
        return view("public.cart",$data);
    }
    public function checkout(){
        $data['addresses'] = Address::where("user_id",Auth::id())->get();
        return view("public.checkout",$data);
    }

    static public function assignAddress($id){
        $address = Address::findOrFail($id);
        $order = get_order();
        $order->address_id = $address->id;
        $order->save();
        return redirect()->route("checkout");

    }

    public function paymentProcess(Request $req){
        $this->assignAddress($req->address_id);

    
    }
    // add to cart
    public function addToCart(Request $req,$p_id){
        $product = Product::findOrFail($p_id);
        $user = Auth::user();
        if($product){
            $order = get_order();
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

    public function removeFromCart(Request $req,$p_id){
        $product = Product::findOrFail($p_id);
        $user = Auth::user();
        if($product){
            $order = Order::where([['ordered',false],['user_id',$user->id]])->first();
            if($order){
                    $orderItem = OrderItem::where([["ordered",false],["order_id",$order->id],["product_id",$product->id]])->first();
                    if($orderItem->qty > 1){
                        //only decrease qty
                        $orderItem->qty -=1;
                        $orderItem->save();
                    }
                    else{
                        //delete
                      $item->delete();
                    }
            }
            
        }
        return redirect()->route("cart");
    }

    public function removeItemFromCart(Request $req,$p_id){
        $product = Product::findOrFail($p_id);
        $user = Auth::user();
        if($product){
            $order = Order::where([['ordered',false],['user_id',$user->id]])->first();
            if($order){
                    $orderItem = OrderItem::where([["ordered",false],["order_id",$order->id],["product_id",$product->id]])->first();
                    if($orderItem){
                       $orderItem->delete();
                    }
                   
            }
            
        }
        return redirect()->route("cart");
    }

    private function CheckCode($code){
        $coupon = Coupon::where([["code",$code],["status",1]])->first();
        return $coupon;
    }
    public function applyCoupon(Request $req){
        $req->validate([
            'code' => 'required'
        ]);

        if($coupon = $this->CheckCode($req->code)){
            $order = Order::where([['ordered',false],['user_id',Auth::id()]])->first();
            $order->coupon_id = $coupon->id;
            $order->save();
            return redirect()->route("cart");
        }
        else{
            return redirect()->route("cart")->with("msg","Invalid Coupon");
        }
    }
    public function removeCoupon(){
            $order = Order::where([['ordered',false],['user_id',Auth::id()]])->first();
            $order->coupon_id = null;
            $order->save();
            return redirect()->route("cart");
    }

    public function order()
    {
        $payment = PaytmWallet::with('receive');
        $payment->prepare([
            
          'order' => "123322",
          'user' => "1",
          'mobile_number' => "7903738819",
          'email' => "sonu@gmail.com",
          'amount' => 200,
          'callback_url' => 'http://127.0.0.1:8000/payment/call-back'
        ]);
        return $payment->receive();
    }

    /**
     * Obtain the payment information.
     *
     * @return Object
     */
    public function paymentCallback()
    {
        $transaction = PaytmWallet::with('receive');
        
        $response = $transaction->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm
        
        if($transaction->isSuccessful()){
          //Transaction Successful
          print_r($response);
        }else if($transaction->isFailed()){
          //Transaction Failed
        }else if($transaction->isOpen()){
          //Transaction Open/Processing
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
        $transaction->getOrderId(); // Get order id
        $transaction->getTransactionId(); // Get transaction id
    }    
}
