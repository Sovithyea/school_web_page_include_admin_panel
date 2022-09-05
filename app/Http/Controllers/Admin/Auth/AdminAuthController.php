<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function index()
    {
        return view ('admin.auth.login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        $validator  = $request->validate([
            'email'   => 'required',
            'password' => 'required'
        ]);

        if(Auth::guard('admin')->attempt($validator)) 
        {
            $request->session()->regenerate();
            return redirect()->to('/admin')->with('message', 'Login Successfully!');
        }

        return redirect()->back()->with('error', 'You enter wrong username or password!');
    }

    public function logout(Request $request) 
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->to('/admin')->with('message', 'Successfully Logout');
    }
}
