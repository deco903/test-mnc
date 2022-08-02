<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\produk;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
      $data_produk = produk::paginate(5);
      return view('index', compact('data_produk'));
    }

    public function create()
    {
        return view('create');
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
        
        return redirect('/pegawai');

    }

    public function edit($id)
    {
        $hasil = produk::find($id);
        return view('edit', compact('hasil'));
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
        return redirect('/pegawai');

    }

    public function delete($id)
    {
        $data_produk = produk::find($id);
        $data_produk->delete();
        return redirect('/pegawai');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$data_produk = DB::table('produk')
		->where('nama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
            return view('index', compact('data_produk'));
 
	}

}
