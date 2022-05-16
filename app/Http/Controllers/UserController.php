<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()   
    {
        $data['user'] = User::all();
        return view("admin.manageUser",$data);
    }

    
    public function create()
    {   
        $data['user'] = User::all();
        return view('admin.insertUser',$data);
    }

    
    public function store(Request $request)
    {
        $request->validate([

            'name'=> 'required',
            'email'=> 'required',
            'email_verified_at'=> 'required',
            'contact'=> 'required',
            'password'=> 'required',
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->contact = $request->contact;
        $data->password = $request->password;
        $data->save();
        return redirect()->route('user.index');
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
