<?php

namespace App\Http\Controllers\Client\Auth;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\ResetPassword;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreUserRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('client.auth.login');
    }

    
    public function storeLogin(Request $request)
    {
        // dd($request->all());
        $validator  = $request->validate([
            'email'   => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($validator)) 
        {
            $request->session()->regenerate();
            return redirect()->to('/')->with('message', 'Login Successfully!');
        }

        return redirect()->back()->with('error', 'You enter wrong username or password!');
    }

    public function register()
    {
        return view('client.auth.register');
    }

    public function storeRegister(StoreUserRequest $request)
    {
        $user = new User();
            
            $user->username = $request->username;
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->gender = $request->gender;
            $user->phonenumber = $request->phonenumber;
        
        $user->save();

        Auth::login($user);

        return redirect()->to('/')->with('message', 'Successfully Register!');
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->to('/')->with('message', 'Successfully Logout');
    }



    /**
       * Write code on Method
       *
       * @return response()
       */
    public function showForgetPasswordForm()
    {
        return view('client.auth.forgot-password');
    }
  
      /**
       * Write code on Method
       *
       * @return response()
       */
    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
          'email' => 'required|email|exists:users',
        ]);
  
        $token = Str::random(64);
  
        DB::table('password_resets')->insert([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
        ]);

        $user = User::where('email', $request->email)->get()->first();
        // dd($user);
        $username = $user->username;
        // dd($username);
        Mail::to($request->email)->send(new ResetPassword($username, $token));

        return back()->with('message', 'We have e-mailed your password reset link!');
    
    }
      /**
       * Write code on Method
       *
       * @return response()
       */
    public function showResetPasswordForm($token) { 

        return view('client.auth.reset-password', compact('token'));

    }
  
      /**
       * Write code on Method
       *
       * @return response()
       */
    public function submitResetPasswordForm(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|confirmed',
            //   'password_confirmation' => 'required'
        ]);
  
        $updatePassword = DB::table('password_resets')->where([
            'email' => $request->email, 
            'token' => $request->token
        ])->first();
  
        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }
  
        $user = User::where('email', $request->email)->update([
            'password' => Hash::make($request->password)
        ]);
 
        DB::table('password_resets')->where(['email'=> $request->email])->delete();
  
        return redirect('/login')->with('message', 'Your password has been changed!');
    
    }

}
