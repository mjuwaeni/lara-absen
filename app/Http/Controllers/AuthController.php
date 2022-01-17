<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pembimbing;


class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role'=>'mahasiswa'])){
            return redirect('/home');
        }else if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role'=>'admin'])){
            return redirect('/home/admin');
        }else{
            return redirect('/');
        }
    }

    public function register(){
        return view('auth.register');
    }

    public function postregister(Request $request){
    $this->validate($request, [
        'name'=>'required',
        'email'=>'required|email:dns',
        'password'=>'required'
    ]);

    $user=new \App\Models\User;
    $user->role='mahasiswa';
    $user->name= $request->name;
    $user->email= $request->email;
    $user->password= bcrypt($request->password);
    $user->save();
    return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
