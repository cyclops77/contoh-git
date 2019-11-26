<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
		$produk = \App\Barang::All();
		return view('barang.index',['produk' => $produk]);
    }
    public function create(Request $req)
    {
    	$b = new \App\Barang;
    	$b->id = mt_rand(1000,9999);
    	$b->nama_barang = $req->nama_barang;
    	$b->stok = $req->stok;
    	$b->harga = $req->harga;

    	$b->save();

		return redirect()->back();    		
    }
}
