<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        if(Session::has('username')){
            return redirect()->to('dashboard');
        }
        return view('login');
    }

    public function loginstore(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user= User::where('email','=',$email)
            ->where('password','=',$password)
            ->first();

        if($user){
            $name = $user->name;
            $role = $user->role;
            Session::put('username',$name);
            Session::put('userrole',$role);
            
            return redirect()->to('dashboard');
            /*$name_session = Session::get('username');
            echo $name_session;*/
        }

        else{
            
            return redirect()->back()->with('mssg','Invalid email or password');
        }
    }

    public function logout()
    {
        Session::flash('username');
        Session::flash('userrole');

        return redirect()->to('login');
    }
}
