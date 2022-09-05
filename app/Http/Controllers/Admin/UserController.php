<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(StoreUserRequest $request)
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

        return redirect()->to('/admin/user')->with('message', 'Successfully Create User');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        
        return view('admin.user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        
        return view('admin.user.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, $id)
    {
        // dd($request->all());
        $user = User::findOrFail($id);

            $user->username = $request->username;
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->gender = $request->gender;
            $user->phonenumber = $request->phonenumber;
        
        $user->save();

        return redirect()->to('/admin/user')->with('message', 'Successfully Update User!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->to('/admin/user')->with('message', 'Successfully Delete User!');
    }
}
