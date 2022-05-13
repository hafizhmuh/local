<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return redirect('/beranda');
        }else{
            return view('layouts.login.regis');
        }
    }
    public function register(Request $request){

        // $request->validate([
        //     'username' => 'required|min:2|max:50',
        //     'firtname' => 'required',
        //     'lastname' => 'required',
        //     'phone' => 'required|numeric',            
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6',                
        //     'repeat_password' => 'required|min:6|max:20|same:password',
        // ]);
        User::create([
            'username'          => $request->username,
            'nama_depan'        => $request->firstname,
            'nama_belakang'     => $request->lastname,
            'email'             => $request->email,
            'no_hp'             => $request->no_hp,
            'password'          => bcrypt($request->password),
            'remember_token'    => Str::random(60)
        ]);
        return redirect('/login');
    }
}
