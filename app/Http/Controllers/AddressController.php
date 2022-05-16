<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    
    public function index(){
        // $data[''] = User::all();
        $data['address'] = Address::all();
        return view("admin.manageAddress",$data);
    }

    
    public function create()
    {   
        $data['user'] = User::all();
        $data['address'] = Address::all();
        return view('admin.insertAddress',$data);
    }

  
    public function store(Request $request)
    {
        $request->validate([

            'user_id'=>'required',
            'street'=>'required',
            'landmark'=>'required',
            'pincode'=>'required',
            'city'=>'required',
            'state'=>'required',
            'name'=>'required',
            'contact'=>'required',
        ]);

        $data = new Address();
        $data->user_id = $request->user_id;
        $data->street = $request->street;
        $data->landmark = $request->landmark;
        $data->pincode = $request->pincode;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->name = $request->name;
        $data->contact = $request->contact;
        $data->save();

        return redirect()->route('address.index');
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
