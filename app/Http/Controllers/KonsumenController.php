<?php

namespace App\Http\Controllers;

use App\Models\ProdukModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KonsumenModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class KonsumenController extends Controller
{
    public function index()
    {
        $allData = [
            // 'produkAll' => ProdukModel::all(),
            'konsumens' => KonsumenModel::GetJoinToProduk__(),
        ];
        return view('admin.konsumen', $allData);
    }
    public function tambah()
    {
        $data = [
            'produkAll' => ProdukModel::all(),
            'konsumens' => KonsumenModel::all(),
        ];

        return view('admin.tambah_konsumen', $data);
    }

    public function tambah_action(Request $request)
    {
        $token = Str::random(100);
        $nama_konsumen = $request->nama_konsumen;
        $alamat_konsumen = $request->alamat_konsumen;
        $nama_produk = $request->id_produk;
        $status_pembelian = $request->status_pembelian;
        $nomer_telepon = $request->nomer_telepon;
        $tanggal_pembelian = $request->tanggal_pembelian ?: now();
        $tanggal_pengirim = $request->tanggal_pengirim;
        $deskripsi = $request->deskripsi;

        $data = [
            'token_konsumen' => $token,
            'nama_konsumen' => $nama_konsumen,
            'alamat_konsumen' => $alamat_konsumen,
            'nomer_telepon' => $nomer_telepon,
            'status_pembelian' => $status_pembelian,
            'tanggal_pembelian' => $tanggal_pembelian,
            'tanggal_pengirim' => $tanggal_pengirim,
            'deskripsi' => $deskripsi,
            'id_produk' => $nama_produk,
        ];

        KonsumenModel::create($data);
        toast('berhasil menambahkan data', 'success');

        return redirect('/konsumen');
    }

    public function updateStatus(Request $request, $id)
    {
        $token = 'djpYzFmX#2b4TSQNCu+S';
        $userid = KonsumenModel::getNomerTelepon($id);

        if ($userid) {
            $target = $userid->nomer_telepon;

            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => 'https://api.fonnte.com/send',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => [
                    'target' => $target,
                    'message' => 'haii ini dari api whatsapp',
                ],
                CURLOPT_HTTPHEADER => ['Authorization:' . $token],
            ]);

            $response = curl_exec($curl);
            if (curl_errno($curl)) {
                $error_msg = curl_error($curl);
            }
            curl_close($curl);

            if (isset($error_msg)) {
                echo $error_msg;
            }
            // echo $response;

            return redirect('/konsumen');
        } else {
            echo 'tidak ada';
        }
    }
}
