<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
    	$ky = \App\Karyawan::All();
    	return view('karyawan.index',['ky' => $ky]);
    }
    public function create(Request $req)
    {
    	$u = new \App\User;
    	$u->id = mt_rand(1000,9999);
    	$u->role = 'kasir';
    	$ky = \App\Karyawan::create([
    		'id' => mt_rand(1000,9999),
    		'user_id' => $u->id,
    		'nama_lengkap' => $req->nama_lengkap,
    		'nohp' => $req->nohp, 
    	]);
    	$u->name = $req->nama_lengkap;
    	$u->email = $req->email;
    	$u->password = bcrypt('secret');

    	$u->save();

    	return redirect()->back();
    }

}
