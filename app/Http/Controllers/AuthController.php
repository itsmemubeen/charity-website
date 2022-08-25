<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('admin.signin');
    }
    public function showUser(){
        return view('admin.user');
    }

    public function checkuser(Request $request){

        $user = Auth::where(['email'=> $request->email])->first();



        if ( $user and Hash::check($request->password, $user->password)){
            $request->session()->put('user_id',$user->id);
            $request->session()->put('user_email',$user->email);
            $request->session()->put('user_password',$user->password);
            $request->session()->put('user_type',$user->type);
            
            return redirect(route('showDashboard'));
       
        }else{
            
            return redirect()->back();
        }


    }
}