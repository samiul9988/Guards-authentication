<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Usercontroller extends Controller
{
    public function create (Request $request){
        /**validation */
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:5|max:30',
            'cpassword' => 'required|min:5|max:30|same:password'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $save = $user->save();

        if ( $save ){
            return redirect()->back()->with('success','Registration Sucessfully');
        }else{
            return redirect()->back()->with('fail','Registration failed');
        }
    }

    public function check (Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:5|max:30'
        ],[
            'email.exists' => 'The email is not existi on user table'
        ]);

        $creds = $request->only('email', 'password');

        if(Auth::attempt($creds)){
            return redirect()->route('user.home');
        }else{
            return redirect()->back()->with('fail', 'Login Crediantials is incorrect');
        }
    }

    public function logout (){
        Auth::logout();
        return redirect('/');
    }
}
