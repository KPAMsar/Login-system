<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Hash;


class authController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }
    public function registration(){
        return view('registration');
    }
    public function registerUser(Request $request){
         $request -> validate([
             'firstname' => 'required',
             'lastname' => 'required',
             'username' => 'required',
             'email' => 'required',
             'password' => 'required',
         ]);

         $user = new User;
         $user->firstname = $request-> firstname;
         $user-> lastname = $request-> lastname;
         $user-> username = $request-> username;
         $user-> email = $request-> email;
         $user-> password =Hash::make($request-> password);
         $req = $user ->save();
         if ($req){
             return back()->with('success','You have successfully registered a user');

         }
         else{
            return back()->with('fail','You have successfully registered a user');
         }


    }

}
