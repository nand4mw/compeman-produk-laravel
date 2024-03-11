<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KonsumenModel extends Model
{
    use HasFactory;

    protected $table = 'konsumen';
    protected $guarded = [];

    public static function GetJoinToProduk__()
    {
        $query = DB::table('konsumen')->join('produk', 'konsumen.id_produk', '=', 'produk.id_produk')->get();

        return $query;
    }

    public static function updateValidationTransactions__()
    {
        $query = DB::table('konsumen')->select('status_pembelian', '=', 'status_pembelian')->get();
        return $query;
    }

    public static function getNomerTelepon($id)
    {
        $query = DB::table('konsumen')->where('id_konsumen', $id)->first();
        return $query;
    }
    public function updateStatusDikirim()
    {
        $this->update(['status_pembelian' => 'dikirim']);
    }

    // public static function GetJoinToProdukResult__()
    // {
    //     $query = DB::table('konsumen')->join('produk', 'konsumen.id_produk', '=', 'produk.id_produk')->select('nama_produk', DB::raw('COUNT(*) as total produk'))->groupBy('nama_produk')->get();

    //     return $query;
    // }
}
