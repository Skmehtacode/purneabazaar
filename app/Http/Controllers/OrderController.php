<?php

namespace App\Http\Controllers;

use App\Models\{Order,Address,Coupon,User};
use Illuminate\Http\Request;

class OrderController extends Controller
{
   
    public function index()

    {   $data['order'] = Order::all();
        return view("admin.manageOrder",$data);
    }

    
    public function create()
    {   
        $data['user'] = User::all();
        $data['address'] = Address::all();
        $data['coupon'] = Coupon::all();
        return view('admin.insertOrder',$data);
    }

    
    public function store(Request $request)
    {
        $request->validate([

            'user_id'=>'required',
            'address_id'=>'required',
            'coupon_id'=>'required',
            'isDeliverd'=>'required',
            'isProcessing'=>'required',
            'isShipped'=>'required',
            'dateOfOrderd'=>'required',
            'ordered'=>'required',
        ]);

        $data = new Order();
        $data->user_id = $request->user_id;
        $data->address_id = $request->address_id;
        $data->coupon_id = $request->coupon_id;
        $data->isDeliverd = $request->isDeliverd;
        $data->isProcessing = $request->isProcessing;
        $data->isShipped = $request->isShipped;
        $data->dateOfOrderd = $request->dateOfOrderd;
        $data->ordered = $request->ordered;
        $data->save();

        return redirect()->route('order.index');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit(Order $order)
    {
        $data['user'] = User::all();
        $data['address'] = Address::all();
        $data['coupon'] = Coupon::all();
        $data['order'] = $order;
        return view('admin.editOrder');
    }

  
    public function update(Request $request, Order $order)
    {
        $request->validate([

            'user_id'=>'required',
            'address_id'=>'required',
            'coupon_id'=>'required',
            'isDeliverd'=>'required',
            'isProcessing'=>'required',
            'isShipped'=>'required',
            'dateOfOrderd'=>'required',
            'ordered'=>'required',
        ]);

        $data->user_id = $request->user_id;
        $data->address_id = $request->address_id;
        $data->coupon_id = $request->coupon_id;
        $data->isDeliverd = $request->isDeliverd;
        $data->isProcessing = $request->isProcessing;
        $data->isShipped = $request->isShipped;
        $data->dateOfOrderd = $request->dateOfOrderd;
        $data->ordered = $request->ordered;
        $data->save();

        return redirect()->route('order.index');
    }

   
    public function destroy($id)
    {
        //
    }
}
