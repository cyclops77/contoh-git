<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class authController extends Controller
{
    public function index()
    {
    	return view('auth.login');
    }
    public function postlogin(Request $request)
    {
    	if (Auth::attempt($request->only('email','password'))) {
    		return redirect('/index');
    	}
    	return redirect()->back();
    }
    public function logout()
    {
        Auth::logout();
        return view('auth.login');
    }
    // public function role()
    // {
    //     $role = Auth()->user()->role;
    //     if (Auth()->user()->role == 'admin') {
    //         return view('welcome');
    //     }
    // }
    public function registerIndex()
    {
    	return view('authentication.daftar');
    }
    public function registrasi(Request $req)
    {
    	$usr = new \App\User;

    	$usr->id = mt_rand(1000,9999);
    	$usr->role = 'admin';
    	$usr->name = $req->name;
    	$usr->email = $req->email;
    	$usr->username = $req->username;
    	$usr->password = bcrypt($req->password);
    	$usr->save();

    	return redirect('/login');
    }
    public function role()
    {
        $role = Auth()->user()->role;
        if (Auth()->user()->role == 'admin') {
            return view('dashboard.admin');
        }else if (Auth()->user()->role == 'kasir') {
            return view('dashboard.kasir');
        }
    }
}
