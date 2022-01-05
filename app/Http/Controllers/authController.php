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
             'username' => 'required | unique:user',
             'email' => 'required|email| unique:user' ,
             'password' => 'required|min:5|max:10',
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
            return back()->with('fail','You have error with your registration');
        }


    }

    public function loginUser(Request $request ){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        $user = User::where('email', '=', $request->'email')->first();
        if($user){
            if(Hash::check($request->'password',$user->'password')){
                $request->Session()->put('loginId',$user->Id);
                return redirect('dashbord')
            }
            else{
                return back()->with('fail','Email not found');
            }

        }
        else{
            return back()->with('fail','Email not found');
        }


    }

    public function dashboard(){
        return 'this is the dashboard';
    }

}
