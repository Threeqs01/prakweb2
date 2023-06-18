<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProduk;
use Illuminate\Support\Facades\DB;


class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_produk = new KategoriProduk();
        return view('admin.kategoriproduk.kategori_produk', ['kategori_produk' => $kategori_produk->getALLData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan seluruh data kategori produk
        $kategori_produk = KategoriProduk::all();
        return view('admin.kategoriproduk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori_produk = new KategoriProduk();
        $kategori_produk->nama = $request->nama;
        $kategori_produk->save();
        return redirect('admin/kategori_produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $kategori_produk = DB::table('kategori_produk')->where('id', $id)->get();
        // return view('admin.kategoriproduk.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // $kategori_produk = KategoriProduk::find($request->id);
        // $kategori_produk->nama = $request->nama;
        // $kategori_produk->save();
        // return redirect('admin/kategori_produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kategori_produk')->where('id',$id)->delete();
        return redirect('admin/kategori_produk');
    }
}