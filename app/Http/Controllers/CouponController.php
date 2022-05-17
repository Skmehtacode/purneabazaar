<?php

namespace App\Http\Controllers;

use App\Models\Coupon;

use Illuminate\Http\Request;

class CouponController extends Controller
{
    
    public function index()

    {   $data['coupon'] = Coupon::all();
        return view("admin.manageCoupon",$data);
    }

   
    public function create()
    {
        return view('admin.insertCoupon');
    }

    
    public function store(Request $request)
    {
        
        $request->validate([

            'code'=>'required',
            'status'=>'required',
            'amount'=>'required',
        ]);

        $data = new Coupon();
        $data->code = $request->code;
        $data->status = $request->status;
        $data->amount = $request->amount;
        $data->save();

        return redirect()->route('coupon.index');
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
