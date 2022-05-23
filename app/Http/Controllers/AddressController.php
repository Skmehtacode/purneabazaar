<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\PublicController;
use Auth;

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

            'street'=>'required',
            'landmark'=>'required',
            'pincode'=>'required',
            'city'=>'required',
            'state'=>'required',
            'name'=>'required',
            'type'=>'required',
            'contact'=>'required',
        ]);

        $data = new Address();
        $data->user_id = Auth::id();
        $data->street = $request->street;
        $data->landmark = $request->landmark;
        $data->pincode = $request->pincode;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->name = $request->name;
        $data->contact = $request->contact;
        $data->type = $request->type;
        $data->save();

        PublicController::assignAddress($data->id);
        return redirect()->route("checkout");
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit(Address $address)
    {
        $data['user']  = user::all();
        $data['address'] = $address;
        return view('admin.editAddress',$data);
    }

   
    public function update(Request $request, Address $address)
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

        $data->user_id = Auth::id();
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

   
    public function destroy(Address $address)
    {
        $address->delete();
        return redirect()->route('address.index');
    }
}
