<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Session;
use App\Mail\ForgotPasswordMail;

class AuthController extends Controller
{
    public function login(Request $request){
        // $password = Hash::make("1234");
        // dd($password);
        return view('backend.auth.login');
    }
    
    public function forgot(Request $request){
        return view('backend.auth.forgot');
    }
    public function forgot_admin(Request $request){
        $random_password = rand(111111111,999999999);
       $use = User::where('email','=',$request->email)->first();
       if(!empty($user)){
        $user->password = Hash::make($random_password);
        $user->save();

        $user->password_random = $random_password;
        Mail::to($user->email)->send(new ForgotPasswordMail($user));
        return redirect('login')->with('success', 'Password send your mail Address. Please check it.');
           
       }else{
        return redirect()->back()->with('error','Email ID is not Found');
       }
    }


    public function login_admin(Request $request){
        if(Auth::attempt([
            'email'=>$request->email, 
            'password'=>$request->password

        ],true)){
            if(!empty(Auth::User()->status)){
                if(Auth::User()->is_role == '1'){
                    return redirect()->intended('admin/dashboard');
                }else{
                    return redirect('login')->with('error', 'Only Admin can access this page');
                }
            }else{
                $user_id = Auth::user()->id;
                Auth::logout();
                $user = User::find('$user_id');
                return redirect('login')->with('success', 'This email id is not varified');
            }
        }else{
            return redirect()->back()->with('error','Please Enter a valid Email  Address and Password');
        }
    }

    // Logout Start 
    public function logout(){
        Auth::logout();
        return redirect(url('login'));
    }
   // Logout End
}
