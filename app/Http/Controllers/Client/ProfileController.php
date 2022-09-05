<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{  
    public function show()
    {
        $user = Auth::user();

        return view('client.pages.profile.view_profile', compact('user'));

    } 

    public function edit()
    {
        $user = Auth::user();

        return view('client.pages.profile.edit_profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $user->username = $request->username;
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->gender = $request->gender;
            $user->phonenumber = $request->phonenumber;
        
        $user->save();

        return redirect()->to('/profile/show')->with('message', 'Successfully Update Profile!');
    }

    public function delete()
    {
        $user = Auth::user();

        $user->delete();

        return redirect()->to('/')->with('message', 'Successfully Delete User!');
    }

    public function change()
    {
        return view('client.pages.profile.change_password');
    }

    public function storeChange(Request $request)
    {
        $request->validate([
            'old_password' => ['required'],
            'new_password' => ['required', 'confirmed'],
        ]);

        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("message", "Password changed successfully!");

        // $old_password = bcrypt($request->old_password);
        // dd($old_password);
        // if(Auth::user()->password == $request->old_password)
        // {
        //     Auth::user()->password == Hash::make($request->new_password);

        //     return redirect()->to('/profile/show')->with('message', 'Successfully Update Password');
        // }

        // return redirect()->back()->with('error', 'Incorrect Old Password');
    }
}
