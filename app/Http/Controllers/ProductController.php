<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class ProductController extends Controller
{
    public function index()
    {
    	$product = DB::table('product')->get();

    	return view('product.dashboard', ['product' => $product]);
    }
        public function product()
    {
        $product = DB::table('product')->get();

        return view('product.product', ['product' => $product]);
    }

    public function tambah()
    {
    	return view('product.tambah');
    }

    public function upload(Request $request)
    {
    	DB::table('product')->insert([
    		'namaProduct' => $request->nama,
    		'kategoriProduct' => $request->kategori,
    		'deskripsiProduct' => $request->deskripsi,
    		'imageProduct' => $request->file->getClientOriginalName(),
    		'hargaProduct' => $request->harga,
    		'beratProduct' => $request->berat,
    		'jumlahProduct' => $request->jumlah,
    	]);
    	$file = $request->file;
    	$tujuan_upload = 'img/product';
    	$file->move($tujuan_upload,$file->getClientOriginalName());

    	return redirect('/product');
    }


    public function edit($id)
    {
    	$product = DB::table('product')->where('idProduct',$id)->get();

    	return view('product.edit', ['product' => $product]);
    }

	public function update(Request $request)
	    {
	    	DB::table('product')->where('idProduct',$request->id)->update([
	    		'namaProduct' => $request->nama,
	    		'kategoriProduct' => $request->kategori,
	    		'deskripsiProduct' => $request->deskripsi,
	    		'hargaProduct' => $request->harga,
	    		'beratProduct' => $request->berat,
	    		'jumlahProduct' => $request->jumlah,
	    	]);

	    	return redirect('/product');
	    }
     public function hapus($id)
    {
    	
    	$file = DB::table('product')->where('idProduct',$id)->first();
    	File::delete('img/product/'.$file->imageProduct);
    	DB::table('product')->where('idProduct',$id)->delete();

    	return redirect('/product');
    }

    public function details($id)
    {
        $product = DB::table('product')->where('idProduct',$id)->get();

        return view('product.details', ['product' => $product]);
    }

}