<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriProdukController extends Controller
{
    public function index()
    {
        $kat = new KategoriProduk();
        return view('admin.kategori.kategori', ['kat' => $kat->tampil()]);
    }
    public function create()
    {
        $kategori = KategoriProduk::all();
        return view('admin.kategori.create');
    }
    public function store(Request $request)
    {
        $kategori = new KategoriProduk();
        $kategori->id = $request->id;
        $kategori->nama = $request->nama;
        $kategori->save();
        return redirect('admin/kategoriproduk');
    }
    public function destroy(string $id)
    {
        DB::table('kategori_produk')->where('id', $id)->delete();
        return redirect('admin/kategoriproduk');
    }
}