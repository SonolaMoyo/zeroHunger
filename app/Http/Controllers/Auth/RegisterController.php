<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Companyuser;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function user()
    {
        return view('usersign-up');
    }

    public function storeuser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        //store the user
        User::create([
            'name' =>$request -> name,
            'username' => $request -> username,
            'email' => $request -> email,
            'password' => Hash::make($request -> password)
        ]);

        auth()->attempt($request->only('email', 'password'));

        //sign in
        return redirect()->route('products');
    }

    public function company()
    {
        return view('companysign-up');
    }

    public function storecompany(Request $request)
    {
        //validate the company
        $this->validate($request, [
            'companyname' => 'required|max:255',
            'name' => 'required|max:255',
            'producttype' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        //store the company
        Companyuser::create([
            'company_name' => $request->companyname,
            'name' => $request->name,
            'product_type' => $request->producttype,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        //authenticate
        auth()->attempt($request->only('email', 'password'));

        //sign in
        return redirect()->route('products');
    }

    public function preregister() {
        return view('presign-up');
    }
}
