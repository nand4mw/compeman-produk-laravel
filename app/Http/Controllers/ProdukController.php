<?php

namespace App\Http\Controllers;

use App\Models\ProdukModel;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        $data = [
            'dataProduk' => DB::table('produk')->where('harga_produk')->get(),
            'results' => ProdukModel::all(),
            'totalProduk' => ProdukModel::getTotalProduk__(),
        ];
        return view('admin.produk', $data);
    }

    public function tambah_action(Request $request)
    {
        // dd($request->all());

        $token = uniqid();
        $token_produk = Str::random(100);
        $file = $request->file('gambar_produk');
        $nama_produk = $request->nama_produk;
        $harga_produk = $request->harga_produk;
        $jumlah_produk = $request->jumlah_produk;
        $gambar_produk = $token . '.' . $file->getClientOriginalExtension();

        $data = [
            'token_produk' => $token_produk,
            'nama_produk' => $nama_produk,
            'gambar_produk' => $gambar_produk,
            'harga_produk' => $harga_produk,
            'jumlah_produk' => $jumlah_produk,
        ];

        $file->move('gambar-produk', $gambar_produk);
        ProdukModel::create($data);
        return redirect('/produk');
    }
}
