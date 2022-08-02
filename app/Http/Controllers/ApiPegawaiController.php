<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\produk;

class ApiPegawaiController extends Controller
{
   public function index()
   {
       return produk::all();
   }
    

public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'warna' =>  'required',
            'ukuran' => 'required',
            'harga' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,bmp,png|max:1024'
        ]);

        $nama = $request->nama;
        $kategori = $request->kategori;
        $deskripsi = $request->deskripsi;
        $warna = $request->warna;
        $ukuran = $request->ukuran;
        $harga = $request->harga;
        $image = $request->file('gambar');
        $imageName = Request()->nama.'.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload/post'), $imageName);


        // dd($request->all());
        $data = new produk();
        $data->nama = $nama;
        $data->kategori = $kategori;
        $data->deskripsi = $deskripsi;
        $data->gambar = $imageName;
        $data->warna = $warna;
        $data->ukuran = $ukuran;
        $data->harga = $harga;
        

        $data->save();
        
        return respon()->json('data berhasil create');

    }

    public function update(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'warna' =>  'required',
            'ukuran' => 'required',
            'harga' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,bmp,png|max:1024'
        ]);

        $data_produk = produk::findOrfail($request->id);
        dd($request->all());
        if($request->has('gambar')){
            $nama = $request->nama;
            $kategori = $request->kategori;
            $deskripsi = $request->deskripsi;
            $warna = $request->warna;
            $ukuran = $request->ukuran;
            $harga = $request->harga;
            $image = $request->file('gambar');
            $imageName = Request()->nama.'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/post'), $imageName);

            $update_data = [
                'nama' => $request->nama,
                'kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
                'warna' => $request->warna,
                'ukuran' => $request->ukuran,
                'harga' => $request->harga,
                'gambar' => $imageName
            ];
        }else{
            $update_data = [
                'nama' => $request->nama,
                'kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
                'warna' => $request->warna,
                'ukuran' => $request->ukuran,
                'harga' => $request->harga
            ];
        }

        $data_produk->update($update_data);
        return respon()->json('data berhasil update');

    }

    public function delete($id)
    {
        $data_produk = produk::find($id);
        $data_produk->delete();
        return respon()->json('data berhasill dihapus');
    }
}